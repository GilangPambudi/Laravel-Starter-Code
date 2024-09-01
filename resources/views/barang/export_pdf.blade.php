<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 6px 20px 5px 20px;
            line-height: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 4px 3px;
        }

        th {
            text-align: left;
        }

        .d-block {
            display: block;
        }

        img.image {
            width: auto;
            height: 80px;
            max-width: 150px;
            max-height: 150px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .p-1 {
            padding: 5px 1px 5px 1px;
        }

        .font-10 {
            font-size: 10pt;
        }

        .font-11 {
            font-size: 11pt;
        }

        .font-12 {
            font-size: 12pt;
        }

        .font-13 {
            font-size: 13pt;
        }

        .border-bottom-header {
            border-bottom: 1px solid;
        }

        .border-all,
        .border-all th,
        .border-all td {
            border: 1px solid;
        }

        table th {
            background-color: #d1cece;
        }

        h3 {
            color: #1106ef;
        }

        .bg-gray {
            background-color: #f3f0f0;
        }
    </style>
</head>

<body>
    <table class="border-bottom-header">
        <tr>
            <td width="15%" class="text-center"><img src="{{ asset('polinema-bw.png') }}"></td>
            <td width="85%">
                <span class="text-center d-block font-11 font-bold mb-1">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</span>
                <span class="text-center d-block font-13 font-bold mb-1">POLITEKNIK NEGERI MALANG</span>
                <span class="text-center d-block font-10">Jl. Soekarno-Hatta No. 9 Malang 65141</span>
                <span class="text-center d-block font-10">Telepon (0341) 404424 Pes. 101-105, 0341-404420, Fax. (0341) 404420</span>
                <span class="text-center d-block font-10">Laman: www.polinema.ac.id</span>
            </td>
        </tr>
    </table>
    <h3 class="text-center">LAPORAN DATA BARANG</h4>
        <table class="border-all">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th class="text-right">Harga Beli</th>
                    <th class="text-right">Harga Jual</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $b)
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray' : '' }}">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $b->barang_kode }}</td>
                        <td>{{ $b->barang_nama }}</td>
                        <td class="text-right">{{ number_format($b->harga_beli, 0, ',', '.') }}</td>
                        <td class="text-right">{{ number_format($b->harga_jual, 0, ',', '.') }}</td>
                        <td>{{ $b->kategori->kategori_nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script type="text/php">
            if ( isset($pdf) ) {
            $x = 490;
            $y = 815;
            $text = "Hal. {PAGE_NUM} dari {PAGE_COUNT}";
            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 9;
            $color = array(0,0,255);
            $word_space = 0.0; // default
            $char_space = 0.0; // default
            $angle = 0.0; // default
            $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space,
            $angle);
            $pdf->page_text(50, $y, 'Export PDF by Laravel', $font, $size, $color,
            $word_space, $char_space, $angle);
            }
</script>
</body>

</html>
