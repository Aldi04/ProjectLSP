<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts.components.head")
</head>

<body>
    <div class="hk-wrapper hk-vertical-nav">
        @include("layouts.components.navbar") 
        @include("layouts.components.sidebar") 
        @include("layouts.components.mainContent")
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>

        @include("layouts.components.modalDestroy")
    </div>
    @include("layouts.components.script")
</body>

</html>