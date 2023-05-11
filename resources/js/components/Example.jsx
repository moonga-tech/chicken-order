import React from 'react';
import ReactDOM from 'react-dom';
import IndexContent from '../components/IndexContent'

function Example() {
    return (
        <div className="container">
            <IndexContent />
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
