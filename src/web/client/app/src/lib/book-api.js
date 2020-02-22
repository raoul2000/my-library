
const baseURL = 'http://localhost/dev/my-library/src/web/index.php?r=api';

/**
 * Get books
 * @returns Promise<[MyLibrary.Book]> book list
 */
const getBooks = () => {
    return fetch(`${baseURL}/book`)
        .then(response => {
            const books = response.json();
            return books;
        });
}

export {
    getBooks
};