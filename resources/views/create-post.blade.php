<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Event Listener Post</h2>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <!-- Text Input -->
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputText1"
                    placeholder="Enter title">
            </div>

            <!-- Text Area -->
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Message</label>
                <textarea class="form-control" name="content" id="exampleInputMessage" rows="3" placeholder="Your message"></textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
