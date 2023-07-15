@extends('template/main')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="text-center mb-4 display-4">Tentang OurStyle</h1>
            <p>OurStyle adalah toko baju online yang berkomitmen untuk memberikan gaya terbaru dan tren fashion terkini. Kami menyediakan berbagai macam pilihan pakaian berkualitas untuk pria, wanita, dan anak-anak.</p>
            <p>Kami percaya bahwa pakaian adalah salah satu cara untuk mengekspresikan kepribadian dan gaya seseorang. Oleh karena itu, kami selalu menghadirkan koleksi yang up-to-date dan bervariasi, sehingga pelanggan kami dapat menemukan pilihan yang tepat sesuai dengan preferensi mereka.</p>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('assets/img/gambarabout.jpg') }}" alt="Gambar Tentang Kami" class="img-fluid">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <p>Kualitas adalah prioritas utama kami. Kami bekerja sama dengan merek-merek terpercaya dan memastikan bahwa setiap produk yang kami tawarkan telah melewati kontrol kualitas yang ketat. Dengan demikian, Anda dapat berbelanja dengan keyakinan dan yakin bahwa Anda mendapatkan produk yang berkualitas tinggi.</p>
            <p>Kami juga sangat memperhatikan kepuasan pelanggan. Tim layanan pelanggan kami siap membantu dan menjawab pertanyaan Anda dengan ramah dan profesional. Kami berusaha memberikan pengalaman belanja online yang nyaman dan memuaskan untuk setiap pelanggan kami.</p>
        </div>
        <div class="col-lg-6">
            <p>Terima kasih telah memilih OurStyle sebagai destinasi belanja fashion Anda. Kami berharap Anda menikmati pengalaman berbelanja di toko online kami dan menemukan pakaian yang memadai gaya Anda!</p>
        </div>
    </div>
</div>
@endsection
    
