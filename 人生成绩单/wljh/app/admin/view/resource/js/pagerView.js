//Created by Ocean.guo 2013.3.1

var PagerView = function(id) {
    var self = this;
    self.id = id;

    self.pageIndex = 1; //当前页
    self.pageSize = 10; //每页显示的记录数
    self.maxShowPages = 5; //最大可显示的导航页数
    self.totalRecord = 0; //总记录

    //external onclick
    self.onclick = function(startRecordIndex, endRecordIndex) {
        return true;
    }

    self.totalPages = function() {
        return parseInt(Math.ceil(self.totalRecord / self.pageSize));
    }

    //interior onclick
    this._onclick = function(pageIndex) {
        var oldPageIndex = self.pageIndex;
        self.pageIndex = pageIndex;

        startRecordIndex = (self.pageIndex - 1) * self.pageSize + 1;
        endRecordIndex = startRecordIndex + self.pageSize - 1;
        //endRecordIndex = endRecordIndex > self.totalRecord ? self.totalRecord : endRecordIndex;
        self.onclick(startRecordIndex, endRecordIndex);

        //alert(startRecordIndex + "," + endRecordIndex);
        //if (self.onclick(startRecordIndex, endRecordIndex) !== false) {
        //self.render();
        //}
        //else {
        //  self.pageIndex = oldPageIndex;
        //  self.startRecordpageIndex = (self.pageIndex - 1) * self.pageSize + 1;
        // self.endRecordpageIndex = self.startRecordpageIndex + self.pageSize - 1;
        //}
    }

    this.refresh = function() {
        startRecordIndex = (self.pageIndex - 1) * self.pageSize + 1;
        endRecordIndex = startRecordIndex + self.pageSize - 1;
        self.onclick(startRecordIndex, endRecordIndex);
    }

    this.render = function() {
        var container = document.getElementById(self.id);
        var totalPages = self.totalPages(); //总页数
        var startPageIndex = Math.max(1, self.pageIndex - parseInt(self.maxShowPages / 2)); //开始页数
        var endPageIndex = Math.min(totalPages, startPageIndex + self.maxShowPages - 1); //结束页数
        startPageIndex = Math.max(1, endPageIndex - self.maxShowPages + 1);

        var startRecordIndex = (self.pageIndex - 1) * self.pageSize + 1;
        var endRecordIndex = startRecordIndex + self.pageSize - 1;
        endRecordIndex = endRecordIndex > self.totalRecord ? self.totalRecord : endRecordIndex;
        //alert(startPageIndex);
        //开始构造Html
        var str = '';
        if(self.totalRecord>0)
        {
            str += '<div class="row">\n';
            if (totalPages > 0) {
                str += "<div class='col-md-5 col-sm-12'><div class='dataTables_info' id='sample_editable_1_info'>共 " + self.totalRecord + " 条</div></div>";
            }
            else {
                str += "<div class='col-md-5 col-sm-12'><div class='dataTables_info' id='sample_editable_1_info'>共 0 条</div></div><div class='col-md-7 col-sm-12'><div class='dataTables_paginate paging_bootstrap'><ul class='pagination'><li class='prev disabled'><a  title='Prev'><i class='icon-angle-left'></i></a></li><li class='next disabled'><a  title='Next'><i class='icon-angle-right'></i></a></li></ul></div></div>";
            }
            if (totalPages >= 1) {
                str += "<div class='col-md-7 col-sm-12'><div class='dataTables_paginate paging_bootstrap'><ul class='pagination pagination-dark'>";
                //前面的button
                if (self.pageIndex != 1) {
                    str += '<li class="prev"><a href="javascript://' + (parseInt(self.pageIndex) - 1) + '" title="Prev" style="height:35px;padding-top: 9px;"><i class="fa fa-angle-double-left"></i></a></li>';
                } else {
                str += "<li class='prev disabled'><a  title='Prev'  style='height:35px;padding-top: 9px;'><i class='fa fa-angle-double-left'></i></a></li>";
                }

                //中间button
                for (var i = startPageIndex; i <= endPageIndex; i++) {
                    if (i == self.pageIndex) {
                        str += '<li class="active"><a >' + i + "</a></li>";
                    } else {
                        str += '<li><a href="javascript://' + i + '">' + i + '</a></li>';
                    }
                }

                //后面的button
                if (self.pageIndex != totalPages) {
                    str += '<li class="next"><a href="javascript://' + (parseInt(self.pageIndex) + 1) + '" title="Next"  style="height:35px;padding-top: 9px;"><i class="fa fa-angle-double-right"></i></a></li>';
                } else {
                str += '<li class="next disabled"><a title="Next"  style="height:35px;padding-top: 9px;"><i class="fa fa-angle-double-right"></i></a></li>';
                }
                str += "</ul></div></div>";
            }

            str += '</div><!-- /.pagerView -->\n';
        }
        else
        {
            str += '<div class="row"><div class=\"col-md-5 col-sm-12\">没有数据!</div></div>';
        }
        container.innerHTML = str;
        

        //动态为各个a标记添加事件
        var a_list = container.getElementsByTagName('a');
        for (var i = 0; i < a_list.length; i++) {
            a_list[i].onclick = function() {
                var pageIndex = this.getAttribute('href');
                if (pageIndex != undefined && pageIndex != '') {
                    pageIndex = parseInt(pageIndex.replace('javascript://', ''));
                    self._onclick(pageIndex)
                }
                return false;
            };
        }
    }

    this.reset = function() {
        self.pageIndex = 1;
        self.totalRecord = 0;
        var container = document.getElementById(self.id);
        container.innerHTML = '';
    }
}

