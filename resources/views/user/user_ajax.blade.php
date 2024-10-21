<!-- Include jQuery before any other scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    $(function() {

        // add new employee ajax request
        $("#add_user_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_user_btn").text('Adding...');
            $.ajax({
                url: '{{ route('user_store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Added!',
                            'user Added Successfully!',
                            'success'
                        )
                        fetchAllusers();
                    }
                    $("#add_user_btn").text('Add user');
                    $("#add_user_form")[0].reset();
                    $("#adduserModal").modal('hide');
                }
            });
        });

        // fetch all employees ajax request
        fetchAllusers();

        function fetchAllusers() {
            $.ajax({
                url: '{{ route('user_show') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_users").html(response);
                    $("table").DataTable({
                        order: [0, 'desc']
                    });
                }
            });
        }

        // edit employee ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('user_edit') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                    
                    $("#edit_role_id").val(response.type);
                    $("#edit_email").val(response.email);
                    $("#edit_name").val(response.name);
                    $("#user_id").val(response.id);

                }
            });
        });


        // update employee ajax request
        $("#edit_user_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_user_btn").text('Updating...');
            $.ajax({
                url: '{{ route('user_update') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Updated!',
                            'User Updated Successfully!',
                            'success'
                        )
                        fetchAllusers();
                    }
                    $("#edit_user_btn").text('Update User');
                    $("#edit_user_form")[0].reset();
                    $("#edituserModal").modal('hide');
                }
            });
        });

        // delete employee ajax request
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('user_delete') }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            console.log(response);
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            fetchAllusers();
                        }
                    });
                }
            })
        });

    });
</script>
