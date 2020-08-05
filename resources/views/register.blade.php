<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign up Form</h3>
    <div>
        <form action="/welcome" method="POST">
            @csrf
            <p>
                First Name:
            </p>
            <input type="text" name="namadepan">
            <p>
                Last Name:
            </p>
            <input type="text" name="namabelakang">
            <br>

            <p>
                Gender:
            </p>
            <input type="radio" name="Gender">Male
            <br>
            <input type="radio" name="Gender">Female
            <br>
            <input type="radio" name="Gender">Other
            <br>

            <p>
                Nationality:
            </p>
            <select>
                <option value="id">Indonesian</option>
                <option value="sg">Singapuran</option>
                <option value="my">Malaysian</option>
                <option value="au">Australian</option>
            </select>
            <br>

            <p>
                Language Spoken:
            </p>
            <input type="checkbox">Bahasa Indonesian
            <br>
            <input type="checkbox">English
            <br>
            <input type="checkbox">other
            <br>

            <p>
                Bio:
            </p>
            <textarea cols="30" rows="7"></textarea>
            <br><br>
            <button type="submit" >submit</button>
        </form>
    </div>
</body>
</html>
