import { useState, useEffect } from 'react';
import { getBooks } from './book-api';

/**
 * Effect to fetch Books
 * @returns [MyLibrary.Book] books
 */
const useGetBooks = () => {
    const [books, setBooks] = useState(null);
    // TODO: add a way to refresh the book list (see https://github.com/raoul2000/react-play/blob/master/src/components/friend-of-the-day/friend-api.js)
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
