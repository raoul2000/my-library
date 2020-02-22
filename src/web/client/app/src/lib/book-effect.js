import { useState, useEffect } from 'react';
import { getBooks } from './book-api';

/**
 * Effect to fetch Books
 * @returns [MyLibrary.Book] books
 */
const useGetBooks = () => {
    const [books, setBooks] = useState(null);

    useEffect(() => {
        if (books === null) {
            getBooks()
                .then(books => setBooks(books));
        }
    });
    return [books];
}

export {
    useGetBooks
};
