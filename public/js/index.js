$(function() {
    const store = new DevExpress.data.CustomStore({
        key: 'id',
        load(loadOptions) {
            console.log(loadOptions);
          const deferred = $.Deferred();
          const args = {};
          args.offset = loadOptions.skip;
          args.limit = loadOptions.take;
          args.sort = loadOptions.sort !== null ? loadOptions.sort[0] : null;
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
          width: 100
        },
        {
          dataField: 'name',
          dataType: 'string'
        }, 
        {
          dataField: 'nickname',
          dataType: 'string'
        },
        {
          dataField: 'weight',
          dataType: 'number'
        }, 
        {
          dataField: 'height',
          dataType: 'number'
        }, 
        {
          dataField: 'gender',
          dataType: 'string'
        }, 
        {
            dataField: 'color',
            dataType: 'string'
        }, 
        {
            dataField: 'friendliness',
            dataType: 'string'
        }, 
        {
            dataField: 'birthday',
            dataType: 'date'
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
        columnHidingEnabled: true
      }).dxDataGrid('instance');
})