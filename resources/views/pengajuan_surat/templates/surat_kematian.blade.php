<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surat Keterangan Kematian</title>

    <style>
        .fs-1 {
            font-size: 10px;

        }

        .fs-2 {
            font-size: 20px;
        }

        .fs-3 {
            font-size: 14px;
        }

        .table,
        .td,
        .th {
            border: 1px solid #595959;
            border-collapse: collapse;
        }

        .td,
        .th {
            padding: 5px;
            width: 100%;
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .text-uppercase {
            text-transform: uppercase;
        }
    </style>
</head>
{{--  --}}

<body style="margin: 0px 10px;">


    <!-- No. Kode Desa -->

    <div style="margin-top: -30px; margin-bottom: 25px;">

        <table>
            <tr>
                <td class="fs-1">
                    Pemerintah Desa/Kelurahan
                </td>
                <td class="fs-1">
                    : <a> MARGASANA</a>
                </td>
            </tr>
            <tr>
                <td class="fs-1">
                    Kecamatan
                </td>
                <td class="fs-1">
                    : <a> JATILAWANG</a>
                </td>
            </tr>
            <tr>
                <td class="fs-1">
                    Kabupaten/Kota
                </td>
                <td class="fs-1">
                    : <a> BANYUMAS</a>
                </td>
            </tr>
            <tr>
                <td class="fs-1">
                    Kode Wilayah
                </td>
                <td>: <a class="fs-1" style="border: 1px solid black; padding: 2px 60px 0px 2px">3302032005</a>
                </td>
            </tr>
        </table>

    </div>

    <!-- Title  -->
    <div align="center" style="margin-top: -30px;">
        <div class="fw-bold fs-1 text-uppercase">
            <span> Surat Keterangan Kematian</span>
        </div>
        <p class="fs-1" style="margin-top: 0px;">Nomor : {{ $surat->nomor_surat }}</p>
    </div>


    <!-- Content -->

    <table>
        <tr>
            <td width="37%" class="fs-1">Nama Kepala Keluarga</td>
            <td class="fs-1">: <a class="fs-1">{{ $surat->kepala_keluarga_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">Nomor Kartu keluarga</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 300px 0px 2px">{{ $surat->no_kk_jenazah }}</a></td>
        </tr>
    </table>


    <!-- DATA JENAZAH -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">JENAZAH</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nik_jenazah }}</a></td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->nama_jenazah }}</a>

            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Jenis Kelamin</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_jenazah }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">4. Tanggal Lahir/Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_jenazah }}</a>

                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_jenazah }}</a>
                <a>Umur</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">5. Tempat Lahir</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 60px 0px 2px;">
                    {{ $surat->tempat_lahir_jenazah }}</a></td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">6. Agama</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->agama_jenazah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Islam </a> <a style="margin-right: 20px">2.
                    Kristen </a><a style="margin-right: 20px">3.
                    Katholik</a><a style="margin-right: 20px">4. Hindu</a><a style="margin-right: 20px">5. Budha</a>
                <a style="margin-right: 20px">6. Lainnya</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">7. Pekerjaan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->pekerjaan_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">8. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_jenazah }}</a></td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

        <tr>
            <td width="37%" class="fs-1">9. Anak Ke</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->anak_ke_jenazah }}</a>
                <a style="margin-right: 20px">1. 2. 3. 4. 5. .....</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">10. Tanggal Kematian</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_mati_jenazah }}</a>

                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_mati_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_mati_jenazah }}</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">11. Pukul</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 60px 0px 2px;">
                    {{ $surat->pukul_jenazah }}</a></td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">12. Sebab Kematian</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->sebab_mati_jenazah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Sakit Biasa/Tua </a> <a
                    style="margin-right: 20px">2.
                    Wabah Penyakit </a><a style="margin-right: 20px">3.
                    Kecelakaan</a><a style="margin-right: 20px">4. Kriminalitas</a><a style="margin-right: 20px">5.
                    Bunuh Diri</a>
                <a style="margin-right: 20px">6. Lainnya</a>
            </td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">13. Tempat Kematian</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 60px 0px 2px;">
                    {{ $surat->tempat_mati_jenazah }}</a></td>
        </tr>

        <tr>
            <td width="37%" class="fs-1">14. Yang Menerangkan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->yang_menerangkan_jenazah }}</a>
                <a style="margin-right: 20px; margin-left: 20px">1. Dokter </a> <a style="margin-right: 20px">2.
                    Bidan/Perawat </a><a style="margin-right: 20px">3.
                    Tenaga Kesehatan</a><a style="margin-right: 20px">4. Kepolisian</a><a
                    style="margin-right: 20px">5.
                    Lainnya</a>

            </td>
        </tr>
    </table>



    <!-- DATA AYAH -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">AYAH</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ayah_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ayah_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ayah_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->pekerjaan_ayah_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">5. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_ayah_jenazah }}</a>
            </td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

    </table>


    <!-- DATA IBU -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">IBU</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_ibu_jenazah }}</a></td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_ibu_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_ibu_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_ibu_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->pekerjaan_ibu_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">5. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_ibu_jenazah }}</a>
            </td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

    </table>
    <!-- DATA PELAPOR -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">PELAPOR</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_pelapor_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_pelapor_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_pelapor_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">4. Jenis Kelamin</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 15px 0px 2px;">{{ $surat->kelamin_pelapor_jenazah }}</a>
                <a style="margin-right: 50px; margin-left: 40px">1. Laki-laki </a> <a>2. Perempuan</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">5. Pekerjaan</td>
            <td class="fs-1 text-uppercase"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->pekerjaan_pelapor_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">6. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_pelapor_jenazah }}</a>
            </td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

    </table>


    <!-- DATA SAKSI I -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">SAKSI I</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_saksi1_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_saksi1_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_saksi1_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->pekerjaan_saksi1_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">5. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_saksi1_jenazah }}</a>
            </td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

    </table>
    <!-- DATA SAKSI II -->
    <table width="100%" style="border: 1px solid black; border-right: none;">
        <tr>
            <td width="37%" class="fs-1" style="font-weight: bold;">SAKSI II</td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">1. NIK</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">{{ $surat->nik_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">2. Nama Lengkap</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->nama_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">3. Tanggal Lahir / Umur</td>
            <td class="fs-1"> :
                <a>Tgl </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->tgl_lahir_saksi2_jenazah }}</a>
                <a>Bln </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->bln_lahir_saksi2_jenazah }}</a>
                <a>Thn</a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->thn_lahir_saksi2_jenazah }}</a>
                <a>Umur </a>
                <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 10px;">{{ $surat->umur_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">4. Pekerjaan</td>
            <td class="fs-1 text-uppercase"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->pekerjaan_saksi2_jenazah }}</a>
            </td>
        </tr>
        <tr>
            <td width="37%" class="fs-1">5. Alamat</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 60px 0px 2px;">{{ $surat->alamat_saksi2_jenazah }}</a>
            </td>
        <tr>
            <td></td>
            <td width="37%" class="fs-1">a. Desa / Kelurahan</td>
            <td class="fs-1">: <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">DESA
                </a></td>
            <td width="37%" class="fs-1">c. Kab/Kota</td>
            <td class="fs-1">: <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">BANYUMAS</a></td>
        </tr>
        <tr>
            <td> </td>
            <td width="37%" class="fs-1">b. Kecamatan</td>
            <td class="fs-1"> : <a class="fs-1"
                    style="border: 1px solid black; padding: 2px 10px 0px 2px;">JATIL</a></td>
            <td width="37%" class="fs-1">Provinsi</td>
            <td class="fs-1"> : <a class="fs-1" style="border: 1px solid black; padding: 2px 10px 0px 2px;">jawa
                    Tengah</a></td>
        </tr>
        </tr>

    </table>


    <!-- Tanda Tangan -->
    <div style="width: 100%;">
        <div align="center" style="width: 250px; position: relative; right: -27em" class="fs-1">
            <p>Margasana, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
            <p style="margin-top: -10px !important">Kepala Desa Margasana</p>
            <br <br <br <br <br <p style="margin-top: -10px !important">DODIT ARI WIBOWO, S.Farm.,Apt</p>
        </div>
    </div>
</body>

</html>
