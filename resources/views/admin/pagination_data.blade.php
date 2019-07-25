@foreach($data as $row)
    <tr>
        <th scope="row">{{ $row->id }}</th>
        <td class="invoice_col_hs">{{ $row->invoice_number }}</td>
        <td class="invoice_date_hs">{{ $row->invoice_date }}</td>
        <td class="invoice_cost_hs">{{ $row->invoice_cost }}</td>
    </tr>
@endforeach
    <tr>
        <td colspan="4" align="center">
            {!! $data->links() !!}
        </td>
    </tr>