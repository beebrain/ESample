<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pdfgen</title>
    <script src="<?= base_url(); ?>./pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>./pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>./pdfmake/scriptgen.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/backend-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/app.js"></script>
</head>

<body>
    <!-- <div class="container">
        <button id="make-pdf" onclick="genPDF()">xxx</button>
    </div> -->
</body>

<script>
    $(document).ready(function() {
        genPDF();

    });

    function genPDF() {
        var dataToSend = {
            "trackNo": "<?php echo $trackNo; ?>"
        };
        $.ajax({
            url: "<?php echo base_url() . 'index.php/sample/samplecontrol/getsampletracking' ?>",
            type: 'POST',
            dataType: 'json',
            data: dataToSend,
            success: function(data) {
                sampledata = data["Sample"][0];
                sampleDetail = data["Sampledetail"];
                recallTrack = sampledata.trackNo;
                createPDFData(sampledata, sampleDetail);

            },
            error: function() {
                alert("Error loading service. Please try again.");
            }
        });

    }

    function createPDFData(sampledata, sampleDetail) {

        trackingno = sampledata.trackNo;
        testid = sampledata.testid;
        activeDate = sampledata.activeDate;
        docnumber = sampledata.docnumber;
        createDate = sampledata.activeDate;
        if (docnumber === "" || docnumber === "0000") {
            docnumber = "xxx";
        }
        createDateYear = parseInt(createDate.substring(0, 4)) + 543 - 2500;
        serviceText = "";
        // activeDate = sampledata.activeDate;
        if (sampledata.service1 === "on") {
            serviceText += "- ให้เยี่ยมชมห้องปฏิบัติการ, ";
        }
        if (sampledata.service2 === "on") {
            serviceText += "- ให้บริการภาชนะเก็บตัวอย่าง, ";
        }
        if (sampledata.service3 === "on") {
            serviceText += "- เทคนิคการตรวจวิเคราะห์, ";
        }
        if (sampledata.service4 === "on") {
            serviceText += "- เครื่องมือวิเคราะห์, ";
        }

        const tableData = [
            ['รหัสปฏิบัติการ', 'ชื่อตัวอย่าง', 'รายการทดสอบ', 'ลักษณะทางกายภาพ', 'จำนวน/ปริมาณ', 'ราคา'],

        ];


        var indexno = 0;
        var totalpriceall = 0;
        var textOperation;
        sampleDetail.forEach(item => {
            textOperation = ++indexno;
            // replace operationNumber with No if null
            if (item.operationnumber !== null) {
                textOperation = activeDate + "_" + item.operationnumber;
            }
            tableData.push([{
                    text: textOperation,
                    style: 'small'
                }, // Normal style for column 1
                {
                    text: item.samplename,
                    style: 'small'
                },
                {
                    text: item.textpack,
                    style: 'small'
                },
                {
                    text: item.appearance,
                    style: 'small'
                },
                {
                    text: item.amount,
                    style: 'small'
                },

                {
                    text: item.totalprice,
                    style: 'small'
                }, // Normal style for column 3
            ]);

            totalpriceall += parseFloat(item.totalprice);
        });

        const tablesummary = [];
        tablesummary.push([{
                text: "รวมราคา",
                style: 'normal',
                alignment: 'center'
            },
            {
                text: totalpriceall,
                style: 'normal'
            }, // Normal style for column 3
        ]);



        pdfMake.fonts = {
            Sarabun: {
                normal: "THSarabunNew.ttf",
                bold: "THSarabunNew Bold.ttf",
                italics: "THSarabunNew Italic.ttf",
                bolditalics: "THSarabunNew BoldItalic.ttf",
            },

            Roboto: {
                normal: "Roboto-Regular.ttf",
                bold: "Roboto-Medium.ttf",
                italics: "Roboto-Italic.ttf",
                bolditalics: "Roboto-MediumItalic.ttf",
            }
        };



        if (sampledata.Agencytype === "other") {
            sampledata.otherAgencytype = "อื่น ๆ : " + sampledata.otherAgencytype;
        }


        if (sampledata.sendertype === "ส่งด้วยตนเอง") {
            sampledata.sendertype = "ส่งด้วยตนเอง";
        } else if (sampledata.sendertype === "ไปรษณีย์") {
            sampledata.sendertype = "ส่งผ่านไปรษณีเลขที่ " + sampledata.othersendertype;
        } else {
            sampledata.sendertype = "ส่งช่องทางอื่น ๆ รายละเอียด " + sampledata.othersendertype;
        }


        var docDefinition = {


            pageSize: 'A4',
            pageMargins: [40, 40, 40, 40],
            footer: function(currentPage, pageCount) {
                return [{
                        text: currentPage.toString() + ' of ' + pageCount,
                        alignment: "center"
                    },

                ]
                // return currentPage.toString() + ' of ' + pageCount;
            },

            //     [
            //     { text: 'Message 1', alignment: 'left' },
            //     { text: 'Message 2', alignment: 'right' }
            // ]

            header: {
                columns: [{
                    text: 'ศวท.อต ' + docnumber + "/" + createDateYear,
                    alignment: 'left'
                }, {
                    text: 'tracking No : ' + trackingno,
                    alignment: 'right'
                }],
                margin: [40, 20, 30, 40] // Adjust margins as needed

            },

            content: [{
                    text: [{
                            text: 'ใบนำส่งตัวอย่าง\n',
                            fontSize: 14,
                            bold: true
                        },
                        {
                            text: 'ศูนย์วิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏอุตรดิตถ์\n โทร. (055) 411096 ต่อ 1679ม 089-7067288',
                            fontSize: 12,
                            bold: true
                        }

                    ],
                    style: 'header',
                    alignment: 'center'
                },
                {
                    alignment: 'justify',
                    columns: [{
                            width: 350,
                            text: 'ชื่อตัวอย่าง ' + sampledata.sampleName.toString()
                        },
                        {
                            width: '*',
                            text: 'วันนำส่ง ' + convertToThaiBuddhistDate(sampledata.datetime).toString()
                        }
                    ]
                },
                {
                    alignment: 'justify',
                    columns: [{
                            width: 80,
                            text: 'ชื่อผู้นำส่ง ' + sampledata.Agencytype.toString()
                        },

                        {
                            width: 150,
                            text: 'รายละเอียด ' + (sampledata.otherAgencytype || "-").toString().toString()
                        },
                        {
                            width: 80,
                            text: 'เลขที่หนังสือนำส่ง' + (sampledata.RegistrationNo || "-").toString()
                        },
                        {
                            width: '*',
                            text: 'ลงวันที่ ' + convertToThaiBuddhistDate(sampledata.RegistrationDate)
                        },

                    ]
                },

                {
                    alignment: 'justify',
                    columns: [{
                            width: 80,
                            text: 'ผู้นำส่ง ' + sampledata.senderAgencyname.toString()
                        },
                        {
                            width: 250,
                            text: 'ที่อยู่ ' + sampledata.address.toString()
                        },
                        {
                            width: '*',
                            text: 'จังหวัด ' + sampledata.province.toString()
                        },

                    ]
                },
                {
                    alignment: 'justify',
                    columns: [{
                            width: 170,
                            text: 'หมายเลขโทรศัพท์ ' + sampledata.telephone.toString()
                        },
                        {
                            width: 110,
                            text: 'lineid ' + (sampledata.LineId || "-").toString()
                        },
                        {
                            width: '*',
                            text: 'email ' + (sampledata.email || "-").toString()
                        }
                    ]
                },

                // if (sampledata.Agencytype === "other") {
                //     textAgencytype.textContent = "อื่น ๆ : " + sampledata.otherAgencytype;

                // } else {
                //     textAgencytype.textContent = sampledata.Agencytype;
                // }


                // textReportuncertainty.textContent = sampledata.Reportuncertainty;
                // textMethodTest.textContent = sampledata.MethodTest;
                // textReturnsample.textContent = sampledata.Returnsample;
                {
                    text: [{
                        text: 'วิธีการส่ง ' + sampledata.sendertype.toString(),
                    }, ],
                    alignment: 'left'
                },
                {
                    canvas: [{
                        type: 'line',
                        x1: 0,
                        y1: 0,
                        x2: 450,
                        y2: 0,
                        lineWidth: 1,
                    }, ]
                },

                {
                    text: 'ตัวอย่างที่นำมาวิเคราะห์ห้องปฏิบัติการทางผู้ให้บริการมีนโยบายไม่ดำเนินการจัดเก็บตัวอย่าง \n ภายหลังจากการทดสอบเสร็จแล้ว ท่านมีความประสงค์ ' + "->" + (sampledata.Returnsample).toString(),
                },

                {
                    text: [{
                        text: 'รายงานผลค่าความไม่แน่นอนของวิธีทดสอบ' + "->" + (sampledata.Reportuncertainty).toString(),
                    }, ],
                    alignment: 'left'
                },
                {
                    text: [{
                        text: 'การเลือกวิธีทดสอบ ' + serviceText,
                    }, ],
                    alignment: 'left'
                },
                {
                    canvas: [{
                        type: 'line',
                        x1: 0,
                        y1: 0,
                        x2: 450,
                        y2: 0,
                        lineWidth: 1,
                    }, ]
                },
                {
                    text: 'รายละเอียดการนำส่ง',
                    style: 'header',
                },
                {
                    unbreakable: false,
                    stack: [{
                        style: 'tableExample',
                        table: {
                            headerRows: 1,
                            body: tableData,
                            widths: ['auto', '*', '*', 80, 'auto', 'auto'], // Adjust column widths as needed
                            border: [false, false, false, false],
                        },

                    }, ]
                },

                {
                    table: {
                        body: tablesummary,
                        widths: ['*', 'auto'], // Adjust column widths as needed
                    },
                    layout: 'lightHorizontalLines', // Optional: Add horizontal lines
                },
                /*{
                    alignment: 'justify',
                    columns: [
                        {
                            width: 100,
                            text: [
                                {text: 'สิ่งที่แนบมาด้วย ', fontSize: 16, bold: true},
                            ],
                            style: 'normal',
                        },
                        {
                            width: 'auto',
                            text: '1.  แผนการจัดการเรียนรู้ \n 2.  เอกสารประกอบการสอน \n 3. ไฟล์บันทึกการสอน'
                        }
                    ]
                },*/


                {
                    alignment: 'center',
                    columns: [{

                            width: '50%',
                            text: [{
                                text: '  ',
                                fontSize: 16,
                                bold: true
                            }, ]
                        },
                        {
                            width: '50%',
                            text: [{
                                    text: '\n',
                                    style: 'abnormal'
                                },
                                {
                                    text: '...................................................'
                                },
                                {
                                    text: '\n',
                                    style: 'abnormal'
                                },
                                {
                                    text: '(' + sampledata.senderAgencyname.toString() + ')'
                                },
                                {
                                    text: '\n',
                                    style: 'abnormal'
                                },
                                {
                                    text: 'ผู้นำส่งตัวอย่าง'
                                },
                            ],
                        }
                    ]
                },
                /*{
                    alignment: 'left',
                    style:'normal',
                    text:[				
                    {text: '\n       ',style:'abnormal'},
                    {text:'จึงเรียนมาเพื่อโปรดพิจารณา'},
                    {text: '\n\n\n                                                 ',style:'abnormal'},
                    {text:'..........................................'},
                    {text: '\n                                                 ',style:'abnormal'},
                    {text:'('+dataFromserver[0].toString()+')'},
                    ],
                    
                    
                }*/
            ],
            styles: {
                header: {
                    fontSize: 16,
                    bold: true,
                    font: "Sarabun"
                },
                subheader: {
                    fontSize: 14,
                    bold: true,
                    font: "Sarabun"
                },
                quote: {
                    italics: true,
                    font: "Sarabun"
                },
                normal: {
                    fontSize: 12,
                    font: "Sarabun"
                },
                small: {
                    fontSize: 10,
                    font: "Sarabun"
                },
                abnormal: {
                    fontSize: 10,
                    font: "Roboto"

                },
                footer: {
                    fontSize: 8,
                    italics: true,
                },
            },
            defaultStyle: {
                fontSize: 12,
                font: "Sarabun",
                alignment: "justify",
                columnGap: 20
            },
        };
        pdfMake.createPdf(docDefinition).open({}, window);
    }



    function convertToThaiBuddhistDate(dateString) {
        try {
            const dateObject = new Date(dateString);

            if (isNaN(dateObject.getTime())) {
                if (dateString === "0000-00-00") {
                    return "วันที่ไม่ได้ระบุ"; // Display a message for missing date
                } else {
                    throw new Error("Invalid date string: " + dateString);
                }
            }

            // Convert Gregorian date to Thai Buddhist date
            const buddhistYear = dateObject.getFullYear() + 543;
            const thaiMonthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
            ];
            const thaiMonth = thaiMonthNames[dateObject.getMonth()];
            const thaiDay = dateObject.getDate();

            // Format Thai Buddhist date string
            const thaiBuddhistDate = `${thaiDay} ${thaiMonth} พ.ศ. ${buddhistYear}`;

            return thaiBuddhistDate;
        } catch (error) {
            console.error(error);
            return "";
        }
    }
</script>

</html>