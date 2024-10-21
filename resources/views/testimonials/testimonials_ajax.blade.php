<!-- Include jQuery before any other scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(function() {


        // show the image when add
    $("#thumbnail_image").on("change", function () {
        const input = this;
        if (input.files && input.files[0]) {
            const reader = new FileReader();
    
            reader.onload = function (e) {
                // Update the src attribute of the img tag with the data URL of the selected image
                $("#selectedImage").attr("src", e.target.result);
                $("#selectedImage").show(); // Show the image
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    });

         

        // fetch all employees ajax request
        fetchAllEvents();

        function fetchAllEvents() {
            $.ajax({
                url: '{{ route('feedback_show') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_events").html(response);
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
                url: '{{ route('feedback_edit') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#name").val(response.name);
                    $("#position").val(response.position); 
                    $("#message").val(response.message); 
                    $("#status_id").val(response.action); 
                    $("#image").html(`<img src="images/feedback/${response.image}" width="100" class="img-fluid img-thumbnail">`);
                    $("#event_id").val(response.id);
                    $("#event_image").val(response.image);
                }
            });
        });


        // update employee ajax request
        $("#edit_event_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_event_btn").text('Updating...');
            $.ajax({
                url: '{{ route('feedback_update') }}',
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
                            'Event Updated Successfully!',
                            'success'
                        )
                        fetchAllEvents();
                    }
                    $("#edit_event_btn").text('Update Event');
                    $("#edit_event_form")[0].reset();
                    $("#editEventModal").modal('hide');
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
                        url: '{{ route('feedback_delete') }}',
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
                            fetchAllEvents();
                        }
                    });
                }
            })
        });

    });
</script>
