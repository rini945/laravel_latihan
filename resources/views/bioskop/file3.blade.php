@extends('bioskop.navbar2')

@section('content')
<style>
    section.content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 4rem 1rem 5rem;
    background: #ffffff;
    color: #6b7280; /* neutral gray for body text */
    font-family: 'Inter', sans-serif;
  }
  h2 {
    font-weight: 600;
    font-size: 2rem;
    color: #111827;
    margin-top: 3rem;
    margin-bottom: 1.5rem;
    text-align: center;
  }
  table {
    width: 90%;
    max-width: 800px;
    margin: 0 auto 3rem auto;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 0.75rem;
    box-shadow: 0 4px 6px rgb(0 0 0 / 0.1);
    background: #ffffff;
    overflow: hidden;
  }

  thead tr {
    background: #f3f4f6; /* light gray */
  }

  th, td {
    padding: 1rem 1.5rem;
    text-align: left;
    font-size: 1rem;
  }

  th {
    font-weight: 600;
    color: #374151;
    border-bottom: 1px solid #e5e7eb;
  }

  tbody tr {
    border-bottom: 1px solid #e5e7eb;
    transition: background-color 0.3s ease;
  }

  tbody tr:last-child {
    border-bottom: none;
  }

  tbody tr:hover {
    background-color: #f9fafb;
  }


</style>

<section class="conten">
<h2>Top Film</h2>
    <table>
        <thead>
            <tr>
                <th>Judul Film</th>
                <th>Produksi</th>
                <th>Penonton</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>JUMBO</td>
                <td>Springboard Anami Films</td>
                <td>10.151.554</td>
            </tr>
            <tr>
                <td>KKN DESA PENARI</td>
                <td>MD Picture</td>
                <td>10.061.033</td>
            </tr>
            <tr>
                <td>AGAK LAEN</td>
                <td>Imajinari</td>
                <td>9.126.607</td>
            </tr>
        </tbody>
    </table>

</section>
@endsection