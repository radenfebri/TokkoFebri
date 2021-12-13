<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark" style="text-decoration: none;">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Jarsey</li>
                </ol>
            </nav>
        </div>
    </div>
    <h2>List <strong>Jarsey</strong></h2>
    {{-- All Product --}}
    <section class="product mb-5">
        <div class="row mt-2">
            @foreach ($products as $data)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/jersey') }}/{{ $data->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $data->nama }}</strong></h5>
                                <h5>Rp.{{ number_format($data->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-dark btn-block">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
