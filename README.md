# Royal Apps Api Documentation ReadME.md
We are implementing a simple eloquent relation mapping in laravel testing that allows the user to login on symphony universal database. Request a list of authors and their responsible books, allow delete access. Showcase all books and their respective authors.. Create a new book mapped to an author. Session handling based.
Expected Routes and Controllers methods:
```txt
UserController 
    └── # login ('/login') - Load the login blade and handle session redirects.
    └── # authenticate ('/authenticate') - Persists inputs and checks the credentials, redirects the user to the dashboard page.
AuthorController
    └── # index ('/) - List all authors with and load the data to the index.blade.php.
    └── # show ('/author/show/{$id}) - List descriptive information about the author from the api, List all books mapped to the author in the books.blade.php.
BooksController
    └── # create ('/create/book') - Load the view page (createbook.blade.php) with session functionalities.
    └── # store ('/store/book') - Persist the data into the database from createbookform.blade.php with author mapping functionalities.
    └── # delete ('/delete/book/${id}') - Delete book functionality.
```

More to be added later