jQuery(document).ready(function ($) {
    $("#uploadBtn").click(function (e) {
        e.preventDefault();

        let file_temp = $("#domaciUpload input").val();

        if(file_temp.includes('.png') || file_temp.includes('.jpg') || file_temp.includes('.jpeg')) {
            $("#domaciUpload").submit();
        } else {
            alert('Fajl mora biti PNG, JPG ili JPEG');
        }
    });
});