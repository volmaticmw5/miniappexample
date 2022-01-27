<!-- Component 2 (A form that when submited will refresh the page and write in the console the submited inputs) -->
<div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">
        <h2>Form (Component 2)</h2>
        <p>This will do different things depending on what page it is.</p>
        <form id="{{ $formData->id }}" class="card p-5">
        <label for="{{ $formData->formFields[0]->id }}">{{ $formData->formFields[0]->label }}:</label>
        <input type="text" min="1" max="25" id="{{ $formData->formFields[0]->id }}">
        <br/>
        <label for="{{ $formData->formFields[1]->id }}">{{ $formData->formFields[1]->label }}:</label>
        <input type="text" min="1" max="25" id="{{ $formData->formFields[1]->id }}">
        <br/>
        <button class="btn btn-primary mt-3 limited-width-btn">Submit</button>
        </form>
    </div>
</div>
