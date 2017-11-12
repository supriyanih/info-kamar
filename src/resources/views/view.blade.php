<h3>Menu</h3>
<a href="{{ route('kelas.index')}}">Kelas Rawat Inap</a>
<a href="{{ route('ruang.index')}}">Ruanga Rawat Inap</a>
<a href="{{ route('bed.index')}}">Tempat Tidur</a>

<h4><strong>Data Kamar Inap</strong></h4>
<table>
  <thead>
    <tr>
      <th>Kode Tempat Tidur</th>
      <th>Status</th>
      <th>Ruangan</th>
      <th>Kelas </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bed as $tt)
      <tr>
        <td>{{$tt->kode_bed}}</td>
        <td>{{$tt->status}}</td>
        <td>{{$tt->ranjang->nama_ruang}}</td>
        <td>{{$tt->ranjang->kelas->nama_kelas}}</td>
      </tr>
    @endforeach

  </tbody>
</table>
