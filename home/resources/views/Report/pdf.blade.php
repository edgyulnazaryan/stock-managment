<!DOCTYPE html>
<html>
<head>
    <title>Invoice Example</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>
<body>
    <div style="width: 100%; max-width: 960px; margin: auto">
                    <table  width="100%" cellpadding="0" cellspacing="0" border="1">
                        <thead>
                            <tr  style="background-color: #eee">
                                <th style="text-align: left; padding: 5px 10px;">Ապրանք</th>
                                <th style="text-align: center; padding: 5px 10px;">Քանակ</th>
                                <th style="text-align: center; padding: 5px 10px;">Գին</th>
                                <th style="text-align: center; padding: 5px 10px;">Մենեջեր</th>
                                <th style="text-align: center; padding: 5px 10px;">Հաճախորդ</th>
                                <th style="text-align: right; padding: 5px 10px;">Բալանս</th>
                            </tr>
                        </thead>
                        <tbody class="tbody_info">

                            @foreach ($data as $product)
                                <tr>
                                    <td style="text-align: left; padding: 5px 10px;">{{ $product->product[0]->title }}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $product->quantity }}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $product->price }}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $product->manager[0]->first_name ." ". $product->manager[0]->last_name}}</td>
                                    <td style="text-align: center; padding: 5px 10px;">{{ $product->customer[0]->first_name ." ". $product->customer[0]->last_name}}</td>
                                    <td style="text-align: right; padding: 5px 10px;">{{ $product->quantity * $product->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

    </div>
</body>
</html>
