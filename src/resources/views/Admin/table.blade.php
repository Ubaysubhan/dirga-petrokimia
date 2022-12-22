<table>
    <thead>
      <tr>
        <th>Created_at</th>
        <th>Nama Distributor</th>
        <th>Provinsi </th>
        <th>Pupuk yang dipilih</th>
        <th>Nama Pimpinan</th>
        <th>jabatan </th>
        <th>Alamat Distributor</th>
        <th>Nomor Telepon</th>
        <th>Email Perusahaan </th>
        <th>PIC Perusahaan</th>
        <th>Nomor Telepon PIC Perusahaan</th>
        <th>Surat Pengajuan Calon Distributor Utama </th>
        <th>nomor Akta </th>
        <th>Tanggal Akta</th>
        <th>File Akta Perusahaan</th>
        <th>Nomor NPWP </th>
        <th>Tanggal NPWP</th>
        <th>File NPWP</th>
        <th>Nomor SKKPK </th>
        <th>Tanggal SKKPK</th>
        <th>File SKKPK</th>
        <th>Nomor Tanda Daftar Perusahaan / Nomor Induk Berusaha </th>
        <th>Masa Berlaku</th>
        <th>File TDP/NIB</th>
        <th>Nomor Surat Ijin Usaha Perdagangan (SIUP) </th>
        <th>Masa Berlaku</th>
        <th>File SIUP</th>
        <th>Nomor Surat Ijin Tempat Usaha </th>
        <th>Masa Berlaku</th>
        <th>Upload SITU</th>
        <th>Provinsi </th>
        <th>Kota/Kabupaten</th>
        <th>Nomor Tanda Daftar Gudang</th>
        <th>Nama Gudang</th>
        <th>File Nomor Tanda Daftar Gudang</th>
        <th>Kapasitas Gudang (m2)</th>
        <th>Luas Gudang</th>
        <th>Alamat Gudang</th>
        <th>Kecamatan</th>
        <th>kelurahan</th>
        <th>kode pos </th>
        <th>Foto Depan Gudang</th>
        <th>Foto Samping Gudang</th>
        <th>Plat </th>
        <th>STNK</th>
        <th>Foto Armada</th>
      </tr>
    </thead>
    @foreach($users as $value)
    <tbody>
      <tr>
        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->created_at }}
            @endif
        </td>
        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Nama_distributor }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Provinsi }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Pupuk_diambil }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Nama_pimpinan }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Jabatan }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->alamat }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Nomor_telepon }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Email_perusahaan }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->pic_perusahaan }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->nomor_pic }}
            @endif
        </td>

        <td>
            @if ($value->biodata == null)
                -
            @else
                {{ $value->biodata->Surat_Pengajuan }}
            @endif
        </td>
        <td>
            @if ($value->akta == null)
                -
            @else
                {{ $value->akta->nomor_akta }}
            @endif
        </td>

        <td>
            @if ($value->akta == null)
                -
            @else
                {{ $value->akta->tanggal_akta }}
            @endif
        </td>

        <td>
        @if ($value->akta == null)
            -
            @else
        {{ $value->akta->image }}
        @endif
        
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->nomor_npwp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->tanggal_npwp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->file_npwp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->nomor_sppkp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->tanggal_sppkp }}
        @endif
        </td>

        <td>
        @if ($value->npwp == null)
            -
            @else
        {{ $value->npwp->file_sppkp }}

        @endif
        </td>

        
        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_tdp }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_tdp }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_tdp }}

        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_siup }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_siup }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_siup }}

        @endif
        </td>
        
        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->nomor_situ }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->masa_berlaku_situ }}
        @endif
        </td>

        <td>
        @if ($value->suratizinusaha == null)
            -
            @else
        {{ $value->suratizinusaha->file_situ }}

        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->provinsi }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kabupaten }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->nomortandagudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->namagudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->file_tdg }}

        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kapasitasgudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->luas_gudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->alamat_gudang }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kecamatan }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kelurahan }}
        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->kode_pos }}
        @endif
        </td>

    

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->foto_depan_gudang }}

        @endif
        </td>

        <td>
        @if ($value->gudang == null)
            -
            @else
        {{ $value->gudang->foto_belakang_gudang }}
        

        @endif
        </td>

        <td>
        @if ($value->armada == null)
            -
            @else
            <ol>
                @foreach ($value->armada as $data)
                    <li>{{ $data->plat }}</li>
                @endforeach
            </ol>
            

        @endif
        </td>

        <td>

        @if ($value->armada == null)
            -
            @else
            <ol>
                @foreach ($value->armada as $data)
                    <li>{{ $data->stnk }}</li>
                @endforeach
            </ol>

        @endif
        </td>

        <td>

        @if ($value->armada == null)
            -
            @else
            <ol>
                @foreach ($value->armada as $data)
                    <li>{{ $data->foto_kendaraan }}</li>
                @endforeach
            </ol>

        @endif
        </td>


        

        @endforeach

        </tr>
        </tbody>

    </table>