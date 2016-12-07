<table style="margin-bottom: 0px" class="table">
    <th>Form</th>
    <th>Price</th>
    <th>Number of Copies</th>
    <th>Total</th>
    @foreach ($requests as $request)
    <tr>
        <td>{{ $request->name }}</td>
        <td>{{ $request->price }}</td>
        <td style="text-align: right">{{ $request->copies }}</td>
        <td style="text-align: right">{{ $request->total }}</td>
    </tr>
    @endforeach