<script src="./assets/js/bundle.js?ver=2.4.0"></script>
<script src="./assets/js/scripts.js?ver=2.4.0"></script>
<script src="./assets/js/charts/gd-default.js?ver=2.4.0"></script>
<script src="./assets/js/canvasjs.min.js"></script>
<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    $(document).ready(function() {
        $('#residentUsername').on('change', function() {

            var category_id = this.value;
            $.ajax({
                url: "recordofficer/get-name.php",
                type: "POST",
                data: {
                    category_id: category_id
                },
                cache: false,
                success: function(result) {
                    $("#name").html(result);
                }
            });
        });
    });
</script>