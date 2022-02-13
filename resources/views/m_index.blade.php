<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">

<thead>
    <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Members Name</th>
        <th scope='col'>Members Address</th>
        <th scope='col'>Members Age</th>
        <th scope='col'>Members Contact</th>
        <th scope='col'>Members Email</th>
        <th scope='col'>Actions </th>
    </tr>
</thead>

<tbody>
    @if(isset($members))
        @foreach($members as $member)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $member->m_Name }}</td>
        <td>{{ $member->m_Address }}</td>
        <td>{{ $member->m_Age }}</td>
        <td>{{ $member->m_Contact }}</td>
        <td>{{ $member->m_Email }}</td>
            <td>
            <a href="{{ route('m.edit', $member->id) }}">Edit</a>
            <a href="{{ route('m.delete', $member->id) }}">Delete</a>
            </td>
    </tr>
        @endforeach
    @endif
</tbody>

</table>
