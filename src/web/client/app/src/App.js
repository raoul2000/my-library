import React from 'react';
import './App.css';
import Button from '@material-ui/core/Button';
import BookList from './components/BookList';

function App() {
  return (
    <div className="App">
      <Button variant="contained" color="primary">
        Hello World
      </Button>
      <BookList />
    </div>
  );
}

export default App;
