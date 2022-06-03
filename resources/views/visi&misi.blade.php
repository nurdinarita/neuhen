@extends('layout.main')

@section('style-sejarah')
    div.container div.row p{
        text-indent: 45px;
    }
@endsection

@section('container')
<div class="container">
    <div class="row mt-3 text-center">
        <h2>{{ $title }}</h2>
        <hr>
    </div>

    <div class="row mt-3">
        <h2>Visi</h2>
        <p style="font-size:20px;">Visi pembangunan Gampong Neuheun enam tahun mendatang adalah terwujudnya masyarakat Gampong yang maju, adil, aman,damai, sejahtera berlandaskan nilai-nilai ajaran Islam serta memiliki harkat dan martabat gampong Neuheun dan Pemerintah Aceh serta Universal.</p>
    </div>

    <div class="row">
        <h2>Misi</h2>
        <div>
            <ol style="padding: 5px 20px 5px 20px; font-size:20px;">
                <li>Melaksanakan Syariat Islam secara kaffah dalam seluruh aspek kehidupan</li>
                <li>Meningkatkan mutu sumberdaya manusia yang unggul dalam penguasaan ilmu pengetahuan dan teknologi(Iptek) serta iman dan taqwa (Imtaq).</li>
                <li>Mengembangkan dan mengelola sumberdaya secara arif dan sesuai dengan daya dukungnya.</li>
                <li>Membangun tatanan ekonomi gampong yang unggul dan kompetitif serta adil berlandaskan ekonomi kerakyatan.</li>
                <li>Membangun sistem infrastruktur yang handal dan efisien.</li>
                <li>Mengembangkan dan melestarikan nilai-nilai budaya dan adat istiadat gampong Neuheun menunjang pembangunan yang berkelanjutan.</li>
                <li>Meningkat kemampuan birokrasi pemerintah gampong Neuheun yang professional, berwibawa dan amanah.</li>
                <li>Memperkuat pemahaman masyarakat tentang berwawasan Islami, berbangsa dan bernegara dalam wadah NKRI serta masyarakat dunia.</li>
                <li>Memperkuat pelaksanaan kewenangan pemerintah Aceh sesuai undang-undang no. 18 tahun 2001 tentang Otonomi Khusus Provinsi Nanggroe Aceh Darussalam dan Undang-Undang Pemerintah Aceh No. 11 tahun 2004 tentang Pemerintah Aceh.</li>
            </ol>
        </div>
    </div>
</div>
@endsection