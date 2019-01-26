$(document).ready(function () {
    $('#userForm').submit(
        function (e) {
            e.preventDefault();
            e.stopPropagation();

            var form = $('#userForm');

            console.log(form.serialize());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/',
                type: 'POST',
                data: form.serialize(),
                success: function (data) {
                   alert('User successfully saved.');
                },
                error:
                    function (data) {
                        var err = JSON.parse(data["responseText"]);
                        alert(err.message);
                    }
            });
        }
    )


});
