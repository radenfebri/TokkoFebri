<div class="container">
    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="">
    </div>

    {{-- PILIH LIGA --}}
    <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
        <div class="row mt-2">
            @foreach ($ligas as $data)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/liga') }}/{{ $data->gambar }}" class="img-fluid">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Best Product --}}
    <section class="best-product mb-5 mt-5">
        <h3><strong>Best Product</strong></h3>
        <div class="row mt-2">
            @foreach ($product as $data)
            <div class="col">
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
