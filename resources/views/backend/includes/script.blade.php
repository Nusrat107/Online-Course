<!-- Jquery Core Js --> 
<script src="{{asset('backend/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend/assets/bundles/sparkline.bundle.js')}}"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('backend/assets/bundles/c3.bundle.js')}}"></script>

<script src="{{Asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{Asset('backend/assets/js/pages/index.js')}}"></script>
</body>

<script>
document.getElementById('icon_image').addEventListener('change', function(e) {
    let file = e.target.files[0];
    let preview = document.getElementById('icon_preview');

    if(file) {
        let reader = new FileReader();
        reader.onload = function(event) {
            preview.src = event.target.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(file);
    } else {
        preview.style.display = "none";
        preview.src = "";
    }
});
</script>

<script>
    $(document).on('click', '.add-more', function () {

        let html = `
        <div class="row mb-2">
            <div class="col-sm-10">
                <select class="form-control selectpicker" data-live-search="true">
                    <option value="">-- Please select --</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select>
            </div>

            <div class="col-sm-2">
                <button type="button" class="btn btn-danger remove">
                    Remove
                </button>
            </div>
        </div>
        `;

        $('#select-wrapper').append(html);
        $('.selectpicker').selectpicker('refresh');
    });

    $(document).on('click', '.remove', function () {
        $(this).closest('.row').remove();
    });
</script>

