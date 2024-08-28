<!DOCTYPE html>
<html>
<head>
    <title>Dropdown Example</title>
</head>
<body>
    <h1>Dropdown List</h1>

    <form action="#" method="post">
        @csrf
        <label for="signature">Select Signature:</label>
        <select id="signature" name="signature">
            @foreach($signatures as $signature)
                <option value="{{ $signature->id }}">{{ $signature->field_name }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
