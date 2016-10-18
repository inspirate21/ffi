// Original code: http://stackoverflow.com/a/14268260/1163000
// Usage: `makeSortable(elem);`
(function() {
    function sortTable(table, col, reverse) {
        var tb = table.tBodies[0], // Use `<tbody>` to ignore `<thead>` and `<tfoot>` rows
            tr = Array.prototype.slice.call(tb.rows, 0); // Put rows into array
        reverse = -((+reverse) || -1);
        tr = tr.sort(function (a, b) { // Sort rows
            return reverse * (a.cells[col].textContent.trim().localeCompare(b.cells[col].textContent.trim()));
        });
        for (var i = 0, len = tr.length; i < len; ++i) {
            tb.appendChild(tr[i]); // Append each row in order
        }
    }
    function makeSortable(table) {
        var th = table.tHead, i;
        th && (th = th.rows[0]) && (th = th.cells);
        if (th) {
            i = th.length;
        } else {
            return; // If no `<thead>` then do nothing
        }
        while (--i >= 0) (function(i) {
            var dir = 1;
            th[i].onmousedown = function() {
                for (var j = 0, jen = th.length; j < jen; ++j) {
                    th[j].className = th[j].className.replace(/(^| )desc|asc( |$)/g, "$1$2");
                }
                sortTable(table, i, (dir = 1 - dir));
                this.className += dir === 1 ? " desc" : " asc";
                return false;
            };
        }(i));
    }
    window.makeSortable = makeSortable;
})();