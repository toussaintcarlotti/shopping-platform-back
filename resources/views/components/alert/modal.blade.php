@if(session('status') || $errors->any())
    <?php
        if ($errors->any()){
            $message = 'Une erreur est survenu ';
            $type = 'error';
        }else{
            $message = 'Les modifications ont bien été enregistrées';
            $type = "success";
        }
    ?>

<script>
    var message = '<?php echo $message ?>';
    var type = '<?php echo $type ?>';

    const button = document.querySelector('#kt_docs_sweetalert_basic');
    window.addEventListener('load', e =>{
        e.preventDefault();

        Swal.fire({
            text: message,
            icon: type,
            buttonsStyling: false,
            confirmButtonText: "Ok !",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    });
</script>
@endif
