@extends('templates/dashboard')
@section('content')
    @php
        $surat = json_decode($pengajuan_surat->surat);
    @endphp
    <div class="bg-white py-4 px-9 mb-5 rounded-lg flex flex-col lg:flex-row justify-center lg:justify-between items-center">
        <div class="text-center lg:text-left">
            <h1 class="text-lg lg:text-2xl text-danger font-semibold mb-2">Detail Pengajuan Surat</h1>
            <p class="text-base text-[13px] lg:text-lg font-normal text-secondary">{{ $pengajuan_surat->jenis_surat }}</p>
        </div>
        @canany(['admin', 'petugas'])
            @if ($pengajuan_surat->status == 'Pending')
                <div class="mt-5 lg:mt-0 flex flex-col lg:flex-row justify-center text-center">
                    <form action="{{ route('pengajuan_surat.reject', $pengajuan_surat->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit"
                            class="text-white bg-danger focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center">Tolak</button>
                    </form>
                    <form class="mt-3 ml-0 lg:ml-3 lg:mt-0" action="{{ route('pengajuan_surat.approve', $pengajuan_surat->id) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit"
                            class="text-dark bg-warning focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center ">Setujui
                            & Proses
                            Surat</button>
                    </form>

                </div>
            @endif

            @if ($pengajuan_surat->status == 'Diproses')
                <a href="{{ route('pengajuan-surat.edit', $pengajuan_surat->id) }}"
                    class="text-white bg-danger focus:outline-none font-medium text-xs rounded-lg lg:text-sm px-5 py-2.5 text-center ">Proses
                    Surat</a>
            @endif
        @endcanany
    </div>

    @if ($pengajuan_surat->jenis_surat == 'Surat Keterangan')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full mt-10 bg-divide-y overflow-hidden">
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Nama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nama }} <br> <br></td>

                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            NIK
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->nik }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Tempat tanggal lahir
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->ttl }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Pekerjaan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->pekerjaan }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Alamat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->alamat }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Kewarganegaraan & Agama
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->negara_agama }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Keperluan
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->keperluan }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Status
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->status }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Keterangan Surat
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $surat->keterangan_surat }} <br> <br></td>
                    </tr>
                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Pesan untuk petugas/admin
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $pengajuan_surat->pesan }} <br> <br></td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Kelahiran')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full ">

                    <h1 class="text-2xl text-dark">Informasi Keluarga</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Kepala Keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kepala_keluarga }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                No Kartu keluarga
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->no_kk }}
                                <br> <br>
                            </td>
                        </tr>
                    </table>

                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Anak</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_bayi }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelamin
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tempat Dilahirkan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tempat_lahir }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tempat Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lokasi_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Hari lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->hari_lahir }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_bayi }}
                                    <br> <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Lahir Pukul
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lahir_pukul }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Anak ke
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->anak_ke }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->jenis_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kelahiran Ke-
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->lahiran_ke }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Penolong Kelahiran
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->penolong_lahir }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Berat Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->berat_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Panjang Bayi
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->panjang_bayi }}
                                    <br> <br>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Orang Tua</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_ibu }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kewarganegaraan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kewarganegaraan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kebangsaan Ibu
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kebangsaan_ibu }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_nikah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_nikah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun Pencatatan Perkawinan
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_nikah }} <br> <br></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
                <div class="flex flex-col lg:flex-row gap-5 justify-center">
                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Ayah</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tanggal lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->tgl_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Bulan lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->bln_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Tahun lahir ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->thn_lahir_ayah }}
                                    <br> <br>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kewarganegaraan Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kewarganegaraan_ayah }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kebangsaan Ayah
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kebangsaan_ayah }} <br> <br></td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Pelapor</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_pelapor }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Jenis Kelamin Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_pelapor }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Pelapor
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_pelapor }} <br> <br></td>
                            </tr>

                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Saksi 1</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_saksi1 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kelamin Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_saksi1 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Saksi 1
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_saksi1 }} <br> <br></td>
                            </tr>
                        </table>
                    </div>


                    <div class="w-full ">
                        <h1 class="text-2xl text-dark">Informasi Saksi 2</h1>
                        <table class="w-full mt-5 bg-divide-y overflow-hidden">

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    NIK Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nik_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Nama Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->nama_saksi2 }} <br> <br></td>
                            </tr>

                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Umur Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->umur_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Kelamin Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->kelamin_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Pekerjaan Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->pekerjaan_saksi2 }} <br> <br></td>
                            </tr>
                            <tr>
                                <td class="w-[40%] lg:w-[15%] font-bold">
                                    Alamat Saksi 2
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $surat->alamat_saksi2 }} <br> <br></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
    @endif

    @if ($pengajuan_surat->jenis_surat == 'Surat Kematian')
        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Almarhum</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tempat Tanggal Lahir
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->ttl }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Kelamin
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->kelamin }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Agama
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->agama }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tanggal Meninggal
                            </td>
                        </tr>
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($surat->tgl_meninggal)->isoFormat('dddd, D MMMM Y') }} <br> <br>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tempat Meninggal
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->tempat_meninggal }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Penyebab Kematian
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->penyebab_meninggal }} <br> <br></td>
                        </tr>
                    </table>
                </div>
                <div class="w-full ">
                    <h1 class="text-2xl text-dark">Informasi Pelapor</h1>
                    <table class="w-full mt-5 bg-divide-y overflow-hidden">
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Nama Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nama_pelapor }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                NIK Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->nik_pelapor }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Tempat Tanggal Lahir pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->ttl_pelapor }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Pekerjaan Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->pekerjaan_pelapor }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Alamat Pelapor
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->alamat_pelapor }} <br> <br></td>
                        </tr>
                        <tr>
                            <td class="w-[40%] lg:w-[15%] font-bold">
                                Hubungan pelapor dengan Almarhum / Almarhumah
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $surat->hub_pelapor_almarhum }} <br> <br></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="bg-white py-6 px-9 mb-5 rounded-lg w-full">
            <div class="overflow-x">
                <table class="w-full bg-divide-y overflow-hidden">

                    <tr>
                        <td class="w-[40%] lg:w-[15%] font-bold">
                            Pesan untuk petugas/admin
                        </td>
                    </tr>
                    <tr>
                        <td>{{ $pengajuan_surat->pesan }} <br> <br></td>
                    </tr>
                </table>
            </div>
        </div>
    @endif
@endsection
