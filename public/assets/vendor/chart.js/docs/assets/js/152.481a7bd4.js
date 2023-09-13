(window.webpackJsonp = window.webpackJsonp || []).push([
    [152],
    {
        482: function (n, t, a) {
            "use strict";
            a.r(t);
            var e = a(6),
                o = Object(e.a)(
                    {},
                    function () {
                        var n = this,
                            t = n.$createElement,
                            a = n._self._c || t;
                        return a(
                            "ContentSlotsDistributor",
                            { attrs: { "slot-key": n.$parent.slotKey } },
                            [
                                a(
                                    "h1",
                                    { attrs: { id: "canvas-background" } },
                                    [
                                        a(
                                            "a",
                                            {
                                                staticClass: "header-anchor",
                                                attrs: {
                                                    href: "#canvas-background",
                                                },
                                            },
                                            [n._v("#")]
                                        ),
                                        n._v(" Canvas background"),
                                    ]
                                ),
                                n._v(" "),
                                a("p", [
                                    n._v(
                                        "In some use cases you would want a background image or color over the whole canvas. There is no built-in support for this, the way you can achieve this is by writing a custom plugin."
                                    ),
                                ]),
                                n._v(" "),
                                a("p", [
                                    n._v(
                                        "In the two example plugins underneath here you can see how you can draw a color or image to the canvas as background. This way of giving the chart a background is only necessary if you want to export the chart with that specific background.\nFor normal use you can set the background more easily with "
                                    ),
                                    a(
                                        "a",
                                        {
                                            attrs: {
                                                href: "https://www.w3schools.com/cssref/css3_pr_background.asp",
                                                target: "_blank",
                                                rel: "noopener noreferrer",
                                            },
                                        },
                                        [n._v("CSS"), a("OutboundLink")],
                                        1
                                    ),
                                    n._v("."),
                                ]),
                                n._v(" "),
                                a(
                                    "tabs",
                                    [
                                        a(
                                            "tab",
                                            { attrs: { name: "Color" } },
                                            [
                                                a("chart-editor", {
                                                    attrs: {
                                                        code: "// <block:setup:1>\nconst data = {\n  labels: [\n    'Red',\n    'Blue',\n    'Yellow'\n  ],\n  datasets: [{\n    label: 'My First Dataset',\n    data: [300, 50, 100],\n    backgroundColor: [\n      'rgb(255, 99, 132)',\n      'rgb(54, 162, 235)',\n      'rgb(255, 205, 86)'\n    ],\n    hoverOffset: 4\n  }]\n};\n// </block:setup>\n\n// <block:plugin:2>\n// Note: changes to the plugin code is not reflected to the chart, because the plugin is loaded at chart construction time and editor changes only trigger an chart.update().\nconst plugin = {\n  id: 'custom_canvas_background_color',\n  beforeDraw: (chart) => {\n    const {ctx} = chart;\n    ctx.save();\n    ctx.globalCompositeOperation = 'destination-over';\n    ctx.fillStyle = 'lightGreen';\n    ctx.fillRect(0, 0, chart.width, chart.height);\n    ctx.restore();\n  }\n};\n// </block:plugin>\n\n// <block:config:0>\nconst config = {\n  type: 'doughnut',\n  data: data,\n  plugins: [plugin],\n};\n// </block:config>\n\nmodule.exports = {\n  actions: [],\n  config: config,\n};\n",
                                                    },
                                                }),
                                            ],
                                            1
                                        ),
                                        n._v(" "),
                                        a(
                                            "tab",
                                            { attrs: { name: "Image" } },
                                            [
                                                a("chart-editor", {
                                                    attrs: {
                                                        code: "// <block:setup:1>\nconst data = {\n  labels: [\n    'Red',\n    'Blue',\n    'Yellow'\n  ],\n  datasets: [{\n    label: 'My First Dataset',\n    data: [300, 50, 100],\n    backgroundColor: [\n      'rgb(255, 99, 132)',\n      'rgb(54, 162, 235)',\n      'rgb(255, 205, 86)'\n    ],\n    hoverOffset: 4\n  }]\n};\n// </block:setup>\n\n// <block:plugin:2>\n// Note: changes to the plugin code is not reflected to the chart, because the plugin is loaded at chart construction time and editor changes only trigger an chart.update().\nconst image = new Image();\nimage.src = 'https://www.chartjs.org/img/chartjs-logo.svg';\n\nconst plugin = {\n  id: 'custom_canvas_background_image',\n  beforeDraw: (chart) => {\n    if (image.complete) {\n      const ctx = chart.ctx;\n      const {top, left, width, height} = chart.chartArea;\n      const x = left + width / 2 - image.width / 2;\n      const y = top + height / 2 - image.height / 2;\n      ctx.drawImage(image, x, y);\n    } else {\n      image.onload = () => chart.draw();\n    }\n  }\n};\n// </block:plugin>\n\n// <block:config:0>\nconst config = {\n  type: 'doughnut',\n  data: data,\n  plugins: [plugin],\n};\n// </block:config>\n\nmodule.exports = {\n  actions: [],\n  config: config,\n};\n",
                                                    },
                                                }),
                                            ],
                                            1
                                        ),
                                    ],
                                    1
                                ),
                            ],
                            1
                        );
                    },
                    [],
                    !1,
                    null,
                    null,
                    null
                );
            t.default = o.exports;
        },
    },
]);
