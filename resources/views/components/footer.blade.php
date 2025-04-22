<!-- Footer -->
<footer class="footer py-4 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p class="mb-0">
                    Made with <i class="fas fa-heart text-danger animate__animated animate__heartBeat animate__infinite"></i> by OptiMarket
                </p>
                <p class="mb-0 mt-2">
                    © {{ date('Y') }} OptiMarket. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
    .footer {
        background: linear-gradient(135deg,rgb(70, 125, 177) 0%,rgb(19, 203, 227) 100%);
        color: white;
    }

    .footer p {
        font-size: 1rem;
        opacity: 0.9;
    }

    .footer .fa-heart {
        font-size: 1.1rem;
    }
</style>
@endpush
