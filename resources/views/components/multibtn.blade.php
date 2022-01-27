<div class="container bg-light mt-5 p-5" role="main">
    <div class="jumbotron">

        <!-- Color changing button -->
        <h2 class="pb-2">Change color button</h2>
        <button id="changeColorBtn" type="button" class="btn btn-primary">{{ $colorBtnName }}</button>

        <div class="spacer"></div>

        <!-- A button that adds another button -->
        <h2 class="pb-2">Add Button</h2>
        <button id="addBtn" type="button" class="btn btn-info">{{ $colorDynDefaultName }}</button>
        <div id="dynamicBtnHolder"></div>

    </div>
</div>