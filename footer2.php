
    <!-- FOOTER SECTION START -->
<footer class="ul-footer amobic-footer">
   
               

    <!-- footer bottom -->
    <div class="ul-footer-bottom amobic-footer-bottom">
        <div class="ul-container">
            <div class="amobic-footer-bottom-wrap">
                <p class="copyright-txt">
                    &copy; 2026 Amobic. All rights reserved.
                </p>

                <div class="amobic-footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER SECTION END -->
    <!-- libraries JS -->
    <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/splide/splide.min.js"></script>
    <script src="assets/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/slim-select/slimselect.min.js"></script>
    <script src="assets/vendor/animate-wow/wow.min.js"></script>
    <script src="assets/vendor/splittype/index.min.js"></script>
    <script src="assets/vendor/mixitup/mixitup.min.js"></script>
    <script src="assets/vendor/fslightbox/fslightbox.js"></script>

    <!-- custom JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tab.js"></script>

    <script>
  const inputs = document.querySelectorAll(".amobic-code-inputs input");

  inputs.forEach((input, index) => {
    input.addEventListener("input", () => {
      input.value = input.value.replace(/[^0-9]/g, "");

      if (input.value && index < inputs.length - 1) {
        inputs[index + 1].focus();
      }
    });

    input.addEventListener("keydown", (e) => {
      if (e.key === "Backspace" && !input.value && index > 0) {
        inputs[index - 1].focus();
      }
    });
  });
</script>


<script>
  function togglePassword(id, button) {
    const input = document.getElementById(id);
    const icon = button.querySelector("i");

    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("bi-eye");
      icon.classList.add("bi-eye-slash");
    } else {
      input.type = "password";
      icon.classList.remove("bi-eye-slash");
      icon.classList.add("bi-eye");
    }
  }
</script>

<script>
  const propertyImages = document.getElementById("propertyImages");
  const imagePreview = document.getElementById("imagePreview");

  let selectedFiles = [];

  propertyImages.addEventListener("change", function () {
    selectedFiles = Array.from(this.files);
    renderPreview();
  });

  function renderPreview() {
    imagePreview.innerHTML = "";

    selectedFiles.forEach((file, index) => {
      const reader = new FileReader();

      reader.onload = function (e) {
        const item = document.createElement("div");
        item.className = "amobic-preview-item";

        item.innerHTML = `
          <img src="${e.target.result}" alt="Property image preview">
          <button type="button" class="amobic-remove-image" onclick="removeImage(${index})">
            <i class="bi bi-x"></i>
          </button>
        `;

        imagePreview.appendChild(item);
      };

      reader.readAsDataURL(file);
    });
  }

  function removeImage(index) {
    selectedFiles.splice(index, 1);

    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));

    propertyImages.files = dataTransfer.files;
    renderPreview();
  }
</script>
</body>

</html>