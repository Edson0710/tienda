<style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #eeeeee;
}

.titulo {
    font-size: 1.5rem;
    font-weight: bold;
    color: gray;
}

.contenedor {
    background-color: white;
    width: 600px;
    margin: 0 auto;
}

.encabezado {
    background-color: #fef5e4;
    width: 100%;
    size: 40px;
    font-size: 20px;
}

.resumen .table-back {
    background-color: #fef5e4;
}

.resumen table td {
    border: none;
    font-size: 14px;
    line-height: 0.1;
}
.resumen table tr, .resumen table {
    border: none;
}

.resumen table th {
    border: none;
}

.articulos table th {
    border: none;
}

.total table {
    width: 30%;
}

.total table td {
    border: none;
    font-size: 18px;
    line-height: 0.1;
}

.contacto {
    background-color: #eeeeee;
}

/*!
 * Bootstrap v4.0.0 (https://getbootstrap.com)
 * Copyright 2011-2018 The Bootstrap Authors
 * Copyright 2011-2018 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}

* {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent
}

@-ms-viewport {
    width: device-width
}

article,
aside,
dialog,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex="-1"]:focus {
    outline: 0 !important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}


address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

dl,
ol,
ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

dfn {
    font-style: italic
}

b,
strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects
}


img {
    vertical-align: middle;
    border-style: none
}


table {
    border-collapse: collapse
}

caption {
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,
input {
    overflow: visible
}

button,
select {
    text-transform: none
}

[type=reset],
[type=submit],
button,
html [type=button] {
    -webkit-appearance: button
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=date],
input[type=datetime-local],
input[type=month],
input[type=time] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=search]::-webkit-search-cancel-button,
[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none !important
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit
}

.h1,
h1 {
    font-size: 2.5rem
}

.h2,
h2 {
    font-size: 2rem
}

.h3,
h3 {
    font-size: 1.75rem
}

.h4,
h4 {
    font-size: 1.5rem
}

.h5,
h5 {
    font-size: 1.25rem
}

.h6,
h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.small,
small {
    font-size: 80%;
    font-weight: 400
}

.mark,
mark {
    padding: .2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: .5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}


.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto
}

code,
kbd,
pre,
samp {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word
}

a>code {
    color: inherit
}


.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,
.no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0
}

.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none
}

.col-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%
}

.col-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.col-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%
}

.col-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}

.col-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%
}

.col-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%
}

.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1
}

.order-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13
}

.order-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0
}

.order-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1
}

.order-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2
}

.order-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3
}

.order-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4
}

.order-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5
}

.order-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6
}

.order-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7
}

.order-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8
}

.order-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9
}

.order-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10
}

.order-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11
}

.order-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12
}

.offset-1 {
    margin-left: 8.333333%
}

.offset-2 {
    margin-left: 16.666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.333333%
}

.offset-5 {
    margin-left: 41.666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.333333%
}

.offset-8 {
    margin-left: 66.666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.333333%
}

.offset-11 {
    margin-left: 91.666667%
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table td,
.table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table .table {
    background-color: #fff
}

.table-sm td,
.table-sm th {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6
}

.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05)
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, .075)
}

.table-primary,
.table-primary>td,
.table-primary>th {
    background-color: #b8daff
}

.table-hover .table-primary:hover {
    background-color: #9fcdff
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #9fcdff
}

.table-secondary,
.table-secondary>td,
.table-secondary>th {
    background-color: #d6d8db
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #c8cbcf
}

.table-success,
.table-success>td,
.table-success>th {
    background-color: #c3e6cb
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,
.table-info>td,
.table-info>th {
    background-color: #bee5eb
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,
.table-warning>td,
.table-warning>th {
    background-color: #ffeeba
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #ffe8a1
}

.table-danger,
.table-danger>td,
.table-danger>th {
    background-color: #f5c6cb
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f1b0b7
}

.table-light,
.table-light>td,
.table-light>th {
    background-color: #fdfdfe
}

.table-hover .table-light:hover {
    background-color: #ececf6
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ececf6
}

.table-dark,
.table-dark>td,
.table-dark>th {
    background-color: #c6c8ca
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe
}

.table-active,
.table-active>td,
.table-active>th {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, .075)
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, .075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #212529;
    border-color: #32383e
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #212529
}

.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #32383e
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, .05)
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, .075)
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}
.float-left {
    float: left !important
}

.float-right {
    float: right !important
}

.float-none {
    float: none !important
}


.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports ((position:-webkit-sticky) or (position:sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    border: 0
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
    -webkit-clip-path: none;
    clip-path: none
}

.w-25 {
    width: 25% !important
}

.w-50 {
    width: 50% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.h-25 {
    height: 25% !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.mw-100 {
    max-width: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.m-0 {
    margin: 0 !important
}

.mt-0,
.my-0 {
    margin-top: 0 !important
}

.mr-0,
.mx-0 {
    margin-right: 0 !important
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important
}

.ml-0,
.mx-0 {
    margin-left: 0 !important
}

.m-1 {
    margin: .25rem !important
}

.mt-1,
.my-1 {
    margin-top: .25rem !important
}

.mr-1,
.mx-1 {
    margin-right: .25rem !important
}

.mb-1,
.my-1 {
    margin-bottom: .25rem !important
}

.ml-1,
.mx-1 {
    margin-left: .25rem !important
}

.m-2 {
    margin: .5rem !important
}

.mt-2,
.my-2 {
    margin-top: .5rem !important
}

.mr-2,
.mx-2 {
    margin-right: .5rem !important
}

.mb-2,
.my-2 {
    margin-bottom: .5rem !important
}

.ml-2,
.mx-2 {
    margin-left: .5rem !important
}

.m-3 {
    margin: 1rem !important
}

.mt-3,
.my-3 {
    margin-top: 1rem !important
}

.mr-3,
.mx-3 {
    margin-right: 1rem !important
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important
}

.ml-3,
.mx-3 {
    margin-left: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.mt-4,
.my-4 {
    margin-top: 1.5rem !important
}

.mr-4,
.mx-4 {
    margin-right: 1.5rem !important
}

.mb-4,
.my-4 {
    margin-bottom: 1.5rem !important
}

.ml-4,
.mx-4 {
    margin-left: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.mt-5,
.my-5 {
    margin-top: 3rem !important
}

.mr-5,
.mx-5 {
    margin-right: 3rem !important
}

.mb-5,
.my-5 {
    margin-bottom: 3rem !important
}

.ml-5,
.mx-5 {
    margin-left: 3rem !important
}

.p-0 {
    padding: 0 !important
}

.pt-0,
.py-0 {
    padding-top: 0 !important
}

.pr-0,
.px-0 {
    padding-right: 0 !important
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important
}

.pl-0,
.px-0 {
    padding-left: 0 !important
}

.p-1 {
    padding: .25rem !important
}

.pt-1,
.py-1 {
    padding-top: .25rem !important
}

.pr-1,
.px-1 {
    padding-right: .25rem !important
}

.pb-1,
.py-1 {
    padding-bottom: .25rem !important
}

.pl-1,
.px-1 {
    padding-left: .25rem !important
}

.p-2 {
    padding: .5rem !important
}

.pt-2,
.py-2 {
    padding-top: .5rem !important
}

.pr-2,
.px-2 {
    padding-right: .5rem !important
}

.pb-2,
.py-2 {
    padding-bottom: .5rem !important
}

.pl-2,
.px-2 {
    padding-left: .5rem !important
}

.p-3 {
    padding: 1rem !important
}

.pt-3,
.py-3 {
    padding-top: 1rem !important
}

.pr-3,
.px-3 {
    padding-right: 1rem !important
}

.pb-3,
.py-3 {
    padding-bottom: 1rem !important
}

.pl-3,
.px-3 {
    padding-left: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.pt-4,
.py-4 {
    padding-top: 1.5rem !important
}

.pr-4,
.px-4 {
    padding-right: 1.5rem !important
}

.pb-4,
.py-4 {
    padding-bottom: 1.5rem !important
}

.pl-4,
.px-4 {
    padding-left: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.pt-5,
.py-5 {
    padding-top: 3rem !important
}

.pr-5,
.px-5 {
    padding-right: 3rem !important
}

.pb-5,
.py-5 {
    padding-bottom: 3rem !important
}

.pl-5,
.px-5 {
    padding-left: 3rem !important
}

.m-auto {
    margin: auto !important
}

.mt-auto,
.my-auto {
    margin-top: auto !important
}

.mr-auto,
.mx-auto {
    margin-right: auto !important
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important
}

.ml-auto,
.mx-auto {
    margin-left: auto !important
}


.text-justify {
    text-align: justify !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left !important
}

.text-right {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.font-weight-light {
    font-weight: 300 !important
}

.font-weight-normal {
    font-weight: 400 !important
}

.font-weight-bold {
    font-weight: 700 !important
}

.font-italic {
    font-style: italic !important
}

.text-white {
    color: #fff !important
}

.text-primary {
    color: #007bff !important
}

a.text-primary:focus,
a.text-primary:hover {
    color: #0062cc !important
}

.text-secondary {
    color: #6c757d !important
}

a.text-secondary:focus,
a.text-secondary:hover {
    color: #545b62 !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:focus,
a.text-success:hover {
    color: #1e7e34 !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:focus,
a.text-info:hover {
    color: #117a8b !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:focus,
a.text-warning:hover {
    color: #d39e00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:focus,
a.text-danger:hover {
    color: #bd2130 !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:focus,
a.text-light:hover {
    color: #dae0e5 !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:focus,
a.text-dark:hover {
    color: #1d2124 !important
}

.text-muted {
    color: #6c757d !important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

/*# sourceMappingURL=bootstrap.min.css.map */

</style>
