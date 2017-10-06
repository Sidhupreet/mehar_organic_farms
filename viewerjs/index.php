

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



        <title>ARP Technologies</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="viewer.css" media="screen"/>
        <script src="viewer.js" type="text/javascript" charset="utf-8"></script>
        <script src="PluginLoader.js" type="text/javascript" charset="utf-8"></script>
        <script>
            loadDocument();
        </script>
    </head>

    <body>
        <div id = "viewer">
            <div id = "titlebar">
                <div id = "documentName"></div>
                <div id = "toolbarRight">
                    <button id = "presentation" class = "toolbarButton presentation" title = "Presentation"></button>
                    <button id = "fullscreen" class = "toolbarButton fullscreen" title = "Fullscreen"></button>
                     <button id = "download" class = "toolbarButton download" title = "Download"></button>
                    
                </div>
           </div>
            <div id = "toolbarContainer">
                <div id = "toolbar">
                    <div id = "toolbarLeft">
                        <div id = "navButtons" class = "splitToolbarButton">
                            <button id = "previous" class = "toolbarButton pageUp" title = "Previous Page"></button>
                            <div class="splitToolbarButtonSeparator"></div>
                            <button id = "next" class = "toolbarButton pageDown" title = "Next Page"></button>
                        </div>
                        <label id = "pageNumberLabel" class = "toolbarLabel" for = "pageNumber">Page:</label>
                        <input type = "number" id = "pageNumber" class = "toolbarField pageNumber"/>
                        <span id = "numPages" class = "toolbarLabel"></span>
                    </div>
                    <div id = "toolbarMiddleContainer" class = "outerCenter">
                        <div id = "toolbarMiddle" class = "innerCenter">
                            <div id = 'zoomButtons' class = "splitToolbarButton">
                                <button id = "zoomOut" class = "toolbarButton zoomOut" title = "Zoom Out"></button>
                                <div class="splitToolbarButtonSeparator"></div>
                                <button id = "zoomIn" class = "toolbarButton zoomIn" title = "Zoom In"></button>
                            </div>
                            <span id="scaleSelectContainer" class="dropdownToolbarButton">
                                <select id="scaleSelect" title="Zoom" oncontextmenu="return false;">
                                    <option id="pageAutoOption" value="auto" selected>Automatic</option>
                                    <option id="pageActualOption" value="page-actual">Actual Size</option>
                                    <option id="pageWidthOption" value="page-width">Full Width</option>
                                    <option id="customScaleOption" value="custom"> </option>
                                    <option value="0.5">50%</option>
                                    <option value="0.75">75%</option>
                                    <option value="1">100%</option>
                                    <option value="1.25">125%</option>
                                    <option value="1.5">150%</option>
                                    <option value="2">200%</option>
                                </select>
                            </span>
                            <div id = "sliderContainer">
                                <div id = "slider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id = "canvasContainer">
                <div id = "canvas"></div>
            </div>
            <div id = "overlayNavigator">
                <div id = "previousPage"></div>
                <div id = "nextPage"></div>
            </div>
            <div id = "overlayCloseButton">
            &#10006;
            </div>
            <div id = "dialogOverlay"></div>
            <div id = "blanked"></div>
        </div>
    </body>
</html>
