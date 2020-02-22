import React from 'react';
import { useGetBooks } from '../lib/book-effect';


const BookList = () => {

    const [books] = useGetBooks();

    let bookList = <div>Loading book list ...</div>;
    if (Array.isArray(books) && books.length !== 0) {
        bookList = <ul>
            {books.map( book => <li>title : {book.title}</li>)}
        </ul>;
    }
    return (
        <div className="book-list">
            The book list
            <hr />
            {bookList}
        </div>
    )
};

export default BookList;