@foreach($data as $row)
    <tr>
        <th scope="row">{{ $row->id }}</th>
        <td>{{ $row->invoice_number }}</td>
        <td>{{ $row->invoice_date }}</td>
        <td>{{ $row->invoice_cost }}</td>
    </tr>
@endforeach
    <tr>
        <td colspan="4" align="center">
            {!! $data->links() !!}
        </td>
    </tr>