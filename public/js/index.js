$(function() {
    const store = new DevExpress.data.CustomStore({
        key: 'id',
        load(loadOptions) {
            console.log(loadOptions);
          const deferred = $.Deferred();
          const args = {};
          args.offset = loadOptions.skip;
          args.limit = loadOptions.take;
          $.ajax({
            url: '/api/kangaroo',
            dataType: 'json',
            data: args,
            success(result) {
              deferred.resolve(result.data, {
                totalCount: result.count
              });
            },
            error() {
              deferred.reject('Data Loading Error');
            },
            timeout: 5000,
          });
    
          return deferred.promise();
        },
    });
    $('#gridContainer').dxDataGrid({
        dataSource: store,
        showBorders: true,
        remoteOperations: true,
        paging: {
          pageSize: 10,
        },
        pager: {
          showPageSizeSelector: true,
          allowedPageSizes: [5, 10, 20],
        },
        columns: [
        {
          dataField: 'id',
          dataType: 'number',
          allowSorting: false
        },
        {
          dataField: 'name',
          dataType: 'string',
          allowSorting: false
        }, 
        {
          dataField: 'nickname',
          dataType: 'string',
          allowSorting: false
        },
        {
          dataField: 'weight',
          dataType: 'number',
          allowSorting: false
        }, 
        {
          dataField: 'height',
          dataType: 'number',
          allowSorting: false
        }, 
        {
          dataField: 'gender',
          dataType: 'string',
          allowSorting: false
        }, 
        {
            dataField: 'color',
            dataType: 'string',
            allowSorting: false
        }, 
        {
            dataField: 'friendliness',
            dataType: 'string',
            allowSorting: false
        }, 
        {
            dataField: 'birthday',
            dataType: 'date',
            allowSorting: false
        },
        {
            type: "buttons",
            buttons: ["edit", {
                text: "Edit",
                onClick: function (e) {
                    const id = e.row.data.id;
                    window.location.href = `/edit/${id}`;
                }
            }]
        }],
        columnHidingEnabled: true,
        columnMinWidth: 100,
        width: '100%'
      }).dxDataGrid('instance');
})