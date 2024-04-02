document.addEventListener('DOMContentLoaded', function () {
    Livewire.on('showAlert', () => {
        Swal.fire({
            title: 'Hello!',
            text: 'This is a SweetAlert2 pop-up!',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
});