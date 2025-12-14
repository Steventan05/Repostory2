<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Study Buddy</title>
    <link rel="stylesheet" href="{{ asset('css/study-share.css') }}">
</head>
<body>

<header>
    <h1>Study Buddy</h1>
    <p>Upload & download study materials</p>
</header>

<main>
    <section class="upload">
        <h2>Upload Study Material</h2>
        <form>
            <input type="file" disabled>
            <button disabled>Upload</button>
            <p class="note">Preview only</p>
        </form>
    </section>

    <section class="materials">
        <h2>Available Materials</h2>
        <ul>
            <li>📄 Data_Structures_Notes.pdf</li>
            <li>📄 Operating_Systems_Slides.pptx</li>
            <li>📄 Database_Design.docx</li>
        </ul>
    </section>
</main>

</body>
</html>
