@if (Session::has('success'))
    <div id="successMessage" class="pt-3">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div id="errorMessage" class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif


<script>
    // Fungsi untuk menghilangkan pesan success
    function hideSuccessMessage() {
        var successMessage = document.getElementById("successMessage");
        if (successMessage) {
            successMessage.style.display = "none";
        }
    }

    // Fungsi untuk menghilangkan pesan kesalahan
    function hideErrorMessage() {
        var errorMessage = document.getElementById("errorMessage");
        if (errorMessage) {
            errorMessage.style.display = "none";
        }
    }

    // Setelah 5 detik, sembunyikan pesan-pesan tersebut
    setTimeout(hideSuccessMessage, 3000); // Pesan success akan hilang setelah 5 detik
    setTimeout(hideErrorMessage, 3000);   // Pesan kesalahan akan hilang setelah 5 detik
</script>
