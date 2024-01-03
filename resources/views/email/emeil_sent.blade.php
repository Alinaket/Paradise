<!DOCTYPE html>
<html lang="ua">
<head>
    <title>{{ $title }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333;">

<div style="max-width: 600px; margin: 0 auto; padding: 20px;">
    <h1>{{$title}}</h1>
    <table>
        <tbody>
        @foreach($body as $key=>$item)
            <tr>
                <td style="max-width: 500px; padding: 8px 10px; font-size: 18px">{{$key}}</td>
                <td>{{$item}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>

