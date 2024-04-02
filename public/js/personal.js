<script>
  // Get all checkboxes
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Add event listener to each checkbox
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      // If the checkbox is checked
      if (this.checked) {
        // Uncheck all other checkboxes
        checkboxes.forEach(cb => {
          if (cb !== this) {
            cb.checked = false;
          }
        });
      }
    });
  });
</script>