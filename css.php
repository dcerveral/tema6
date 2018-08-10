a {text-decoration:none; !important}


.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (min-width: 768px) {
  .col-lg-6 {
    width: 100%;
    float: left;
    }
  }
@media (min-width: 992px) {
  .col-lg-6 {
    width: 50%;
    float: left;
    }
  }
@media (min-width: 1200px) {
  .col-lg-6 {
    width: 50%;
    float: left;
    }
}

@-ms-viewport {
  width: device-width; }
body {
  -ms-overflow-style: scrollbar; }

@media screen and (max-width: 480px) {
  html, body {
    min-width: 320px; } }
html {
  box-sizing: border-box; }

*, *:before, *:after {
  box-sizing: inherit; }

body {
  background: #ffffff; }
  body.is-preload *, body.is-preload *:before, body.is-preload *:after {
    -moz-animation: none !important;
    -webkit-animation: none !important;
    -ms-animation: none !important;
    animation: none !important;
    -moz-transition: none !important;
    -webkit-transition: none !important;
    -ms-transition: none !important;
    transition: none !important; }

html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline; }

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block; }


body {
  line-height: 1; }

ol, ul {
  list-style: none; }

blockquote, q {
  quotes: none; }
  blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

body {
  -webkit-text-size-adjust: none; }

mark {
  background-color: transparent;
  color: inherit; }

input::-moz-focus-inner {
  border: 0;
  padding: 0; }

input, select, textarea {
  -moz-appearance: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none; }

/* Typography */
html {
  font-size: 13pt; }
  @media screen and (max-width: 1680px) {
    html {
      font-size: 11pt; } }
  @media screen and (max-width: 980px) {
    html {
      font-size: 12pt; } }
  @media screen and (max-width: 480px) {
    html {
      font-size: 11pt; } }

body {
  background-color: #ffffff;
  color: #444444; }

body, input, select, textarea {
  font-family: "Raleway", Arial, Helvetica, sans-serif;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1.65; }

a {
  -moz-transition: color 0.2s ease-in-out;
  -webkit-transition: color 0.2s ease-in-out;
  -ms-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
  text-decoration: underline; }
  a:hover {
    text-decoration: none; }

strong, b {
  font-weight: 600; }

em, i {
  font-style: italic; }

p {
  margin: 0 0 2rem 0; }

header.special {
  text-align: center;
  margin-bottom: 4rem; }
  header.special p {
    max-width: 75%;
    margin-left: auto;
    margin-right: auto; }

h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
  line-height: 1.5;
  text-transform: uppercase;
  margin: 0 0 1.5rem 0; }
  h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    color: inherit;
    text-decoration: none; }

h1 {
  font-size: 3rem;
  line-height: 1.2; }

h2 {
  font-size: 2.25rem;
  line-height: 1.3; }

h3 {
  font-size: 1.25rem; }

h4 {
  font-size: 1rem; }

h5 {
  font-size: 0.9rem; }

h6 {
  font-size: 0.7rem; }

@media screen and (max-width: 736px) {
  h1 {
    font-size: 2.75rem;
    line-height: 1.3; }

  h2 {
    font-size: 1.75rem;
    line-height: 1.5; }

  h3 {
    font-size: 1.25rem; } }
sub {
  font-size: 0.8rem;
  position: relative;
  top: 0.5rem; }

sup {
  font-size: 0.8rem;
  position: relative;
  top: -0.5rem; }

blockquote {
  border-left: solid 0.5rem;
  font-style: italic;
  margin: 0 0 2rem 0;
  padding: 1rem 0 1rem 2rem; }

code {
  border-radius: 4px;
  border: solid 1px;
  font-family: "Courier New", monospace;
  font-size: 0.9rem;
  margin: 0 0.25rem;
  padding: 0.25rem 0.65rem; }

pre {
  -webkit-overflow-scrolling: touch;
  font-family: "Courier New", monospace;
  font-size: 0.9rem;
  margin: 0 0 2rem 0; }
  pre code {
    display: block;
    line-height: 1.75;
    padding: 1rem 1.5rem;
    overflow-x: auto; }

hr {
  border: 0;
  border-bottom: solid 1px;
  margin: 2rem 0; }
  hr.major {
    margin: 4rem 0; }

input, select, textarea {
  color: <? echo $conf['terciario']; ?>; }

a {
  color: <? echo $conf['primario']; ?>; }

strong, b {
  color: <? echo $conf['terciario']; ?>; }

h1, h2, h3, h4, h5, h6 {
  color: <? echo $conf['terciario']; ?>; }

blockquote {
  border-left-color: rgba(0, 0, 0, 0.25); }

code {
  background: rgba(0, 0, 0, 0.075);
  border-color: rgba(0, 0, 0, 0.25); }

hr {
  border-bottom-color: rgba(0, 0, 0, 0.25); }

/* Inner */
.inner {
  margin: 0 auto;
  width: 75rem;
  max-width: calc(100% - 6rem); }
  @media screen and (max-width: 480px) {
    .inner {
      max-width: calc(100% - 3rem); } }

/* Button */
input[type="submit"],
input[type="reset"],
input[type="button"],
button,
.button {
  -moz-appearance: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none;
  -moz-transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
  -webkit-transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
  -ms-transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out, color 0.2s ease-in-out;
  border: 0;
  border-radius: 4px;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  height: 3.25rem;
  line-height: 3.25rem;
  padding: 0 1.75rem;
  text-align: center;
  text-decoration: none;
  white-space: nowrap; }
  input[type="submit"].small,
  input[type="reset"].small,
  input[type="button"].small,
  button.small,
  .button.small {
    font-size: 0.8rem;
    height: 2.4375rem;
    line-height: 2.4375rem;
    padding: 0 1.25rem; }
  input[type="submit"].large,
  input[type="reset"].large,
  input[type="button"].large,
  button.large,
  .button.large {
    font-size: 1.35rem;
    height: 4.0625rem;
    line-height: 4.0625rem;
    padding: 0 2rem; }
  input[type="submit"].wide,
  input[type="reset"].wide,
  input[type="button"].wide,
  button.wide,
  .button.wide {
    min-width: 13rem; }
  input[type="submit"].icon:before,
  input[type="reset"].icon:before,
  input[type="button"].icon:before,
  button.icon:before,
  .button.icon:before {
    margin-right: 0.5rem; }
  input[type="submit"].fit,
  input[type="reset"].fit,
  input[type="button"].fit,
  button.fit,
  .button.fit {
    width: 100%; }
  input[type="submit"].disabled, input[type="submit"]:disabled,
  input[type="reset"].disabled,
  input[type="reset"]:disabled,
  input[type="button"].disabled,
  input[type="button"]:disabled,
  button.disabled,
  button:disabled,
  .button.disabled,
  .button:disabled {
    pointer-events: none;
    opacity: 0.25; }

input[type="submit"],
input[type="reset"],
input[type="button"],
button,
.button {
  background-color: transparent;
  box-shadow: inset 0 0 0 1px <? echo $conf['terciario']; ?>;
  color: <? echo $conf['terciario']; ?> !important; }
  input[type="submit"]:hover,
  input[type="reset"]:hover,
  input[type="button"]:hover,
  button:hover,
  .button:hover {
    box-shadow: inset 0 0 0 1px <? echo $conf['primario']; ?>;
    color: <? echo $conf['primario']; ?> !important; }
    input[type="submit"]:hover:active,
    input[type="reset"]:hover:active,
    input[type="button"]:hover:active,
    button:hover:active,
    .button:hover:active {
      background-color: rgba(206, 27, 40, 0.25); }
  input[type="submit"].primary,
  input[type="reset"].primary,
  input[type="button"].primary,
  button.primary,
  .button.primary {
    box-shadow: none;
    background-color: <? echo $conf['primario']; ?>;
    color: #ffffff !important; }
    input[type="submit"].primary:hover,
    input[type="reset"].primary:hover,
    input[type="button"].primary:hover,
    button.primary:hover,
    .button.primary:hover {
      background-color: <? echo $conf['secundario']; ?>;
      box-shadow: none; }
      input[type="submit"].primary:hover:active,
      input[type="reset"].primary:hover:active,
      input[type="button"].primary:hover:active,
      button.primary:hover:active,
      .button.primary:hover:active {
        background-color: #b71824; }

/* Form */
form {
  margin: 0 0 2rem 0; }

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"],
input[type="search"],
input[type="url"],
select,
textarea {
  -moz-appearance: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none;
  border-radius: 4px;
  border: none;
  border: solid 1px;
  color: inherit;
  display: block;
  outline: 0;
  padding: 0 1rem;
  text-decoration: none;
  width: 100%; }
  input[type="text"]:invalid,
  input[type="password"]:invalid,
  input[type="email"]:invalid,
  input[type="tel"]:invalid,
  input[type="search"]:invalid,
  input[type="url"]:invalid,
  select:invalid,
  textarea:invalid {
    box-shadow: none; }

label {
  display: block;
  font-size: 1rem;
  font-weight: 600;
  margin: 0 0 1rem 0; }

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"],
input[type="search"],
input[type="url"] {
  height: 3.25rem; }

select {
  background-size: 1.25rem;
  background-repeat: no-repeat;
  background-position: calc(100% - 1rem) center;
  height: 3.25rem;
  padding-right: 3.25rem;
  text-overflow: ellipsis; }
  select:focus::-ms-value {
    background-color: transparent; }
  select::-ms-expand {
    display: none; }

textarea {
  padding: 0.75rem 1rem; }

input[type="checkbox"],
input[type="radio"] {
  -moz-appearance: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none;
  display: block;
  float: left;
  margin-right: -2rem;
  opacity: 0;
  width: 1rem;
  z-index: -1; }
  input[type="checkbox"] + label,
  input[type="radio"] + label {
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    font-size: 1rem;
    font-weight: 400;
    padding-left: 2.825rem;
    padding-right: 0.875rem;
    position: relative; }
    input[type="checkbox"] + label:before,
    input[type="radio"] + label:before {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      font-family: FontAwesome;
      font-style: normal;
      font-weight: normal;
      text-transform: none !important; }
    input[type="checkbox"] + label:before,
    input[type="radio"] + label:before {
      border-radius: 4px;
      border: solid 1px;
      content: '';
      display: inline-block;
      height: 1.95rem;
      left: 0;
      line-height: 1.86875rem;
      position: absolute;
      text-align: center;
      top: -0.1625rem;
      width: 1.95rem; }
  input[type="checkbox"]:checked + label:before,
  input[type="radio"]:checked + label:before {
    content: '\f00c'; }

input[type="checkbox"] + label:before {
  border-radius: 4px; }

input[type="radio"] + label:before {
  border-radius: 100%; }

::-webkit-input-placeholder {
  opacity: 1.0; }

:-moz-placeholder {
  opacity: 1.0; }

::-moz-placeholder {
  opacity: 1.0; }

:-ms-input-placeholder {
  opacity: 1.0; }

label {
  color: <? echo $conf['terciario']; ?>; }

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"],
input[type="search"],
input[type="url"],
select,
textarea {
  background-color: rgba(0, 0, 0, 0.075);
  border-color: rgba(0, 0, 0, 0.25); }
  input[type="text"]:focus,
  input[type="password"]:focus,
  input[type="email"]:focus,
  input[type="tel"]:focus,
  input[type="search"]:focus,
  input[type="url"]:focus,
  select:focus,
  textarea:focus {
    border-color: <? echo $conf['primario']; ?>;
    box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }

select {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(0, 0, 0, 0.25)' /%3E%3C/svg%3E"); }
  select option {
    color: #444444;
    background-color: #ffffff; }

input[type="checkbox"] + label,
input[type="radio"] + label {
  color: #444444; }
  input[type="checkbox"] + label:before,
  input[type="radio"] + label:before {
    background: rgba(0, 0, 0, 0.075);
    border-color: rgba(0, 0, 0, 0.25); }
input[type="checkbox"]:checked + label:before,
input[type="radio"]:checked + label:before {
  background-color: <? echo $conf['primario']; ?>;
  border-color: <? echo $conf['primario']; ?>;
  color: #ffffff; }
input[type="checkbox"]:focus + label:before,
input[type="radio"]:focus + label:before {
  border-color: <? echo $conf['primario']; ?>;
  box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }

::-webkit-input-placeholder {
  color: #bbbbbb !important; }

:-moz-placeholder {
  color: #bbbbbb !important; }

::-moz-placeholder {
  color: #bbbbbb !important; }

:-ms-input-placeholder {
  color: #bbbbbb !important; }

/* List */
ol {
  list-style: decimal;
  margin: 0 0 2rem 0;
  padding-left: 1.25rem; }
  ol li {
    padding-left: 0.25rem; }

ul {
  list-style: disc;
  margin: 0 0 2rem 0;
  padding-left: 1rem; }
  ul li {
    padding-left: 0.325rem; }
  ul.plain {
    list-style: none;
    padding-left: 0; }
    ul.plain li {
      margin-bottom: 1rem; }
      ul.plain li .icon {
        border-radius: 4px;
        color: #ffffff;
        display: inline-block;
        margin-right: 1rem;
        text-align: center;
        width: 2rem;
        height: 2rem;
        line-height: 2rem;
        background: rgba(0, 0, 0, 0.5); }
  ul.alt {
    list-style: none;
    padding-left: 0; }
    ul.alt li {
      border-top: solid 1px;
      padding: 0.75rem 0; }
      ul.alt li:first-child {
        border-top: 0;
        padding-top: 0; }
      ul.alt li:last-child {
        padding-bottom: 0; }

dl {
  margin: 0 0 2rem 0; }
  dl dt {
    display: block;
    font-weight: 600;
    margin: 0 0 1rem 0; }
  dl dd {
    margin-left: 1.5rem; }

ul.alt li {
  border-top-color: rgba(0, 0, 0, 0.25); }

/* Table */
.table-wrapper {
  -webkit-overflow-scrolling: touch;
  overflow-x: auto; }

table {
  margin: 0 0 2rem 0;
  width: 100%; }
  table tbody tr {
    border: solid 1px;
    border-left: 0;
    border-right: 0; }
  table td {
    padding: 0.75rem 0.75rem; }
  table th {
    font-size: 0.9rem;
    font-weight: 600;
    padding: 0 0.75rem 0.75rem 0.75rem;
    text-align: left; }
  table thead {
    border-bottom: solid 2px; }
  table tfoot {
    border-top: solid 2px; }
  table.alt {
    border-collapse: separate; }
    table.alt tbody tr td {
      border: solid 1px;
      border-left-width: 0;
      border-top-width: 0; }
      table.alt tbody tr td:first-child {
        border-left-width: 1px; }
    table.alt tbody tr:first-child td {
      border-top-width: 1px; }
    table.alt thead {
      border-bottom: 0; }
    table.alt tfoot {
      border-top: 0; }

table tbody tr {
  border-color: rgba(0, 0, 0, 0.25); }
  table tbody tr:nth-child(2n + 1) {
    background-color: rgba(0, 0, 0, 0.075); }
table th {
  color: <? echo $conf['terciario']; ?>; }
table thead {
  border-bottom-color: rgba(0, 0, 0, 0.25); }
table tfoot {
  border-top-color: rgba(0, 0, 0, 0.25); }
table.alt tbody tr td {
  border-color: rgba(0, 0, 0, 0.25); }

/* Highlights */
.highlights {
  width: 100%;
  margin: 2.5rem 0;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -moz-align-items: -moz-stretch;
  -webkit-align-items: -webkit-stretch;
  -ms-align-items: -ms-stretch;
  align-items: stretch; }
  .highlights > * {
    -moz-flex-shrink: 1;
    -webkit-flex-shrink: 1;
    -ms-flex-shrink: 1;
    flex-shrink: 1;
    -moz-flex-grow: 0;
    -webkit-flex-grow: 0;
    -ms-flex-grow: 0;
    flex-grow: 0; }
  .highlights > * {
    width: 33.3333333333%; }
  .highlights > * {
    padding: 1.5rem;
    width: calc(33.3333333333% + 1rem); }
  .highlights > :nth-child(-n + 3) {
    padding-top: 0; }
  .highlights > :nth-last-child(-n + 3) {
    padding-bottom: 0; }
  .highlights > :nth-child(3n + 1) {
    padding-left: 0; }
  .highlights > :nth-child(3n) {
    padding-right: 0; }
  .highlights > :nth-child(3n + 1),
  .highlights > :nth-child(3n) {
    width: calc(33.3333333333% + -0.5rem); }
  .highlights .content {
    border-radius: 4px;
    height: 100%;
    padding: 3rem;
    text-align: center; }
    .highlights .content .icon {
      font-size: 5rem; }
  .highlights > div > :last-child {
    margin-bottom: 0; }
  @media screen and (max-width: 980px) {
    .highlights > * {
      width: 50%; }
    .highlights > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .highlights > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .highlights > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .highlights > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .highlights > :nth-child(3n) {
      padding-right: 1rem; }
    .highlights > :nth-child(3n + 1),
    .highlights > :nth-child(3n) {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .highlights > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .highlights > :nth-child(-n + 2) {
      padding-top: 0; }
    .highlights > :nth-last-child(-n + 2) {
      padding-bottom: 0; }
    .highlights > :nth-child(2n + 1) {
      padding-left: 0; }
    .highlights > :nth-child(2n) {
      padding-right: 0; }
    .highlights > :nth-child(2n + 1),
    .highlights > :nth-child(2n) {
      width: calc(50% + 0rem); }
    .highlights .content {
      padding: 2rem; } }
  @media screen and (max-width: 736px) {
    .highlights > * {
      width: 100%; }
    .highlights > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .highlights > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .highlights > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .highlights > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .highlights > :nth-child(3n) {
      padding-right: 1rem; }
    .highlights > :nth-child(3n + 1),
    .highlights > :nth-child(3n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .highlights > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .highlights > :nth-child(-n + 2) {
      padding-top: 1rem; }
    .highlights > :nth-last-child(-n + 2) {
      padding-bottom: 1rem; }
    .highlights > :nth-child(2n + 1) {
      padding-left: 1rem; }
    .highlights > :nth-child(2n) {
      padding-right: 1rem; }
    .highlights > :nth-child(2n + 1),
    .highlights > :nth-child(2n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .highlights > * {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .highlights > :nth-child(-n + 1) {
      padding-top: 0; }
    .highlights > :nth-last-child(-n + 1) {
      padding-bottom: 0; }
    .highlights > :nth-child(1n + 1) {
      padding-left: 0; }
    .highlights > :nth-child(1n) {
      padding-right: 0; }
    .highlights > :nth-child(1n + 1),
    .highlights > :nth-child(1n) {
      width: calc(100% + 1rem); } }

.highlights .content {
  background: #ffffff;
  box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025); }

/* Testimonials */
.testimonials {
  margin: 2.5rem 0;
  width: 100%;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -moz-align-items: -moz-stretch;
  -webkit-align-items: -webkit-stretch;
  -ms-align-items: -ms-stretch;
  align-items: stretch; }
  .testimonials > * {
    -moz-flex-shrink: 1;
    -webkit-flex-shrink: 1;
    -ms-flex-shrink: 1;
    flex-shrink: 1;
    -moz-flex-grow: 0;
    -webkit-flex-grow: 0;
    -ms-flex-grow: 0;
    flex-grow: 0; }
  .testimonials > * {
    width: 33.3333333333%; }
  .testimonials > * {
    padding: 1.5rem;
    width: calc(33.3333333333% + 1rem); }
  .testimonials > :nth-child(-n + 3) {
    padding-top: 0; }
  .testimonials > :nth-last-child(-n + 3) {
    padding-bottom: 0; }
  .testimonials > :nth-child(3n + 1) {
    padding-left: 0; }
  .testimonials > :nth-child(3n) {
    padding-right: 0; }
  .testimonials > :nth-child(3n + 1),
  .testimonials > :nth-child(3n) {
    width: calc(33.3333333333% + -0.5rem); }
  .testimonials .content {
    border-radius: 4px;
    height: 100%;
    padding: 3rem; }
    .testimonials .content .author {
      display: -moz-flex;
      display: -webkit-flex;
      display: -ms-flex;
      display: flex;
      -moz-align-items: center;
      -webkit-align-items: center;
      -ms-align-items: center;
      align-items: center; }
      .testimonials .content .author blockquote {
        margin: 0; }
      .testimonials .content .author .image {
        margin-right: 2rem;
        width: 20%; }
        .testimonials .content .author .image img {
          border-radius: 100%;
          max-width: 100%; }
    .testimonials .content .credit {
      font-size: 0.75rem; }
    .testimonials .content p:last-child {
      margin: 0; }
  .testimonials > div > :last-child {
    margin-bottom: 0; }
  @media screen and (max-width: 980px) {
    .testimonials > * {
      width: 50%; }
    .testimonials > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .testimonials > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(3n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(3n + 1),
    .testimonials > :nth-child(3n) {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > :nth-child(-n + 2) {
      padding-top: 0; }
    .testimonials > :nth-last-child(-n + 2) {
      padding-bottom: 0; }
    .testimonials > :nth-child(2n + 1) {
      padding-left: 0; }
    .testimonials > :nth-child(2n) {
      padding-right: 0; }
    .testimonials > :nth-child(2n + 1),
    .testimonials > :nth-child(2n) {
      width: calc(50% + 0rem); }
    .testimonials .content {
      padding: 2rem; } }
  @media screen and (max-width: 736px) {
    .testimonials > * {
      width: 100%; }
    .testimonials > * {
      padding: 1rem;
      width: calc(33.3333333333% + 0.6666666667rem); }
    .testimonials > :nth-child(-n + 3) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 3) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(3n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(3n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(3n + 1),
    .testimonials > :nth-child(3n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(50% + 1rem); }
    .testimonials > :nth-child(-n + 2) {
      padding-top: 1rem; }
    .testimonials > :nth-last-child(-n + 2) {
      padding-bottom: 1rem; }
    .testimonials > :nth-child(2n + 1) {
      padding-left: 1rem; }
    .testimonials > :nth-child(2n) {
      padding-right: 1rem; }
    .testimonials > :nth-child(2n + 1),
    .testimonials > :nth-child(2n) {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > * {
      padding: 1rem;
      width: calc(100% + 2rem); }
    .testimonials > :nth-child(-n + 1) {
      padding-top: 0; }
    .testimonials > :nth-last-child(-n + 1) {
      padding-bottom: 0; }
    .testimonials > :nth-child(1n + 1) {
      padding-left: 0; }
    .testimonials > :nth-child(1n) {
      padding-right: 0; }
    .testimonials > :nth-child(1n + 1),
    .testimonials > :nth-child(1n) {
      width: calc(100% + 1rem); } }

.testimonials .content {
  background: #ffffff;
  box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025); }
  .testimonials .content .credit strong {
    color: <? echo $conf['primario']; ?>; }

/* Actions */
ul.actions {
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  cursor: default;
  list-style: none;
  margin-left: -1rem;
  padding-left: 0; }
  ul.actions li {
    padding: 0 0 0 1rem;
    vertical-align: middle; }
  ul.actions.special {
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    width: calc(100% + 1rem); }
  ul.actions.stacked {
    -moz-flex-direction: column;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-left: 0; }
    ul.actions.stacked li {
      padding: 1.3rem 0 0 0; }
      ul.actions.stacked li:first-child {
        padding-top: 0; }
  ul.actions.fit {
    width: calc(100% + 1rem); }
    ul.actions.fit li {
      -moz-flex-grow: 1;
      -webkit-flex-grow: 1;
      -ms-flex-grow: 1;
      flex-grow: 1;
      -moz-flex-shrink: 1;
      -webkit-flex-shrink: 1;
      -ms-flex-shrink: 1;
      flex-shrink: 1;
      width: 100%; }
      ul.actions.fit li > * {
        width: 100%; }
    ul.actions.fit.stacked {
      width: 100%; }
  @media screen and (max-width: 480px) {
    ul.actions:not(.fixed) {
      -moz-flex-direction: column;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-left: 0;
      width: 100% !important; }
      ul.actions:not(.fixed) li {
        -moz-flex-grow: 1;
        -webkit-flex-grow: 1;
        -ms-flex-grow: 1;
        flex-grow: 1;
        -moz-flex-shrink: 1;
        -webkit-flex-shrink: 1;
        -ms-flex-shrink: 1;
        flex-shrink: 1;
        padding: 1rem 0 0 0;
        text-align: center;
        width: 100%; }
        ul.actions:not(.fixed) li > * {
          width: 100%; }
        ul.actions:not(.fixed) li:first-child {
          padding-top: 0; }
        ul.actions:not(.fixed) li input[type="submit"],
        ul.actions:not(.fixed) li input[type="reset"],
        ul.actions:not(.fixed) li input[type="button"],
        ul.actions:not(.fixed) li button,
        ul.actions:not(.fixed) li .button {
          width: 100%; }
          ul.actions:not(.fixed) li input[type="submit"].icon:before,
          ul.actions:not(.fixed) li input[type="reset"].icon:before,
          ul.actions:not(.fixed) li input[type="button"].icon:before,
          ul.actions:not(.fixed) li button.icon:before,
          ul.actions:not(.fixed) li .button.icon:before {
            margin-left: -0.5rem; } }

/* Grid */
.row {
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box; }
  .row > * {
    box-sizing: border-box; }
  .row.gtr-uniform > * > :last-child {
    margin-bottom: 0; }

.row > .imp {
  order: -1; }
.row > .col-1 {
  width: 8.3333333333%; }
.row > .off-1 {
  margin-left: 8.3333333333%; }
.row > .col-2 {
  width: 16.6666666667%; }
.row > .off-2 {
  margin-left: 16.6666666667%; }
.row > .col-3 {
  width: 25%; }
.row > .off-3 {
  margin-left: 25%; }
.row > .col-4 {
  width: 33.3333333333%; }
.row > .off-4 {
  margin-left: 33.3333333333%; }
.row > .col-5 {
  width: 41.6666666667%; }
.row > .off-5 {
  margin-left: 41.6666666667%; }
.row > .col-6 {
  width: 50%; }
.row > .off-6 {
  margin-left: 50%; }
.row > .col-7 {
  width: 58.3333333333%; }
.row > .off-7 {
  margin-left: 58.3333333333%; }
.row > .col-8 {
  width: 66.6666666667%; }
.row > .off-8 {
  margin-left: 66.6666666667%; }
.row > .col-9 {
  width: 75%; }
.row > .off-9 {
  margin-left: 75%; }
.row > .col-10 {
  width: 83.3333333333%; }
.row > .off-10 {
  margin-left: 83.3333333333%; }
.row > .col-11 {
  width: 91.6666666667%; }
.row > .off-11 {
  margin-left: 91.6666666667%; }
.row > .col-12 {
  width: 100%; }
.row > .off-12 {
  margin-left: 100%; }
.row.gtr-0 {
  margin-top: 0;
  margin-left: 0rem; }
  .row.gtr-0 > * {
    padding: 0 0 0 0rem; }
  .row.gtr-0.gtr-uniform {
    margin-top: 0rem; }
    .row.gtr-0.gtr-uniform > * {
      padding-top: 0rem; }
.row.gtr-25 {
  margin-top: 0;
  margin-left: -0.75rem; }
  .row.gtr-25 > * {
    padding: 0 0 0 0.75rem; }
  .row.gtr-25.gtr-uniform {
    margin-top: -0.75rem; }
    .row.gtr-25.gtr-uniform > * {
      padding-top: 0.75rem; }
.row.gtr-50 {
  margin-top: 0;
  margin-left: -1.5rem; }
  .row.gtr-50 > * {
    padding: 0 0 0 1.5rem; }
  .row.gtr-50.gtr-uniform {
    margin-top: -1.5rem; }
    .row.gtr-50.gtr-uniform > * {
      padding-top: 1.5rem; }
.row {
  margin-top: 0;
  margin-left: -3rem; }
  .row > * {
    padding: 0 0 0 3rem; }
  .row.gtr-uniform {
    margin-top: -3rem; }
    .row.gtr-uniform > * {
      padding-top: 3rem; }
.row.gtr-150 {
  margin-top: 0;
  margin-left: -4.5rem; }
  .row.gtr-150 > * {
    padding: 0 0 0 4.5rem; }
  .row.gtr-150.gtr-uniform {
    margin-top: -4.5rem; }
    .row.gtr-150.gtr-uniform > * {
      padding-top: 4.5rem; }
.row.gtr-200 {
  margin-top: 0;
  margin-left: -6rem; }
  .row.gtr-200 > * {
    padding: 0 0 0 6rem; }
  .row.gtr-200.gtr-uniform {
    margin-top: -6rem; }
    .row.gtr-200.gtr-uniform > * {
      padding-top: 6rem; }

@media screen and (max-width: 1680px) {
  .row {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box; }
    .row > * {
      box-sizing: border-box; }
    .row.gtr-uniform > * > :last-child {
      margin-bottom: 0; }

  .row > .imp-xlarge {
    order: -1; }
  .row > .col-1-xlarge {
    width: 8.3333333333%; }
  .row > .off-1-xlarge {
    margin-left: 8.3333333333%; }
  .row > .col-2-xlarge {
    width: 16.6666666667%; }
  .row > .off-2-xlarge {
    margin-left: 16.6666666667%; }
  .row > .col-3-xlarge {
    width: 25%; }
  .row > .off-3-xlarge {
    margin-left: 25%; }
  .row > .col-4-xlarge {
    width: 33.3333333333%; }
  .row > .off-4-xlarge {
    margin-left: 33.3333333333%; }
  .row > .col-5-xlarge {
    width: 41.6666666667%; }
  .row > .off-5-xlarge {
    margin-left: 41.6666666667%; }
  .row > .col-6-xlarge {
    width: 50%; }
  .row > .off-6-xlarge {
    margin-left: 50%; }
  .row > .col-7-xlarge {
    width: 58.3333333333%; }
  .row > .off-7-xlarge {
    margin-left: 58.3333333333%; }
  .row > .col-8-xlarge {
    width: 66.6666666667%; }
  .row > .off-8-xlarge {
    margin-left: 66.6666666667%; }
  .row > .col-9-xlarge {
    width: 75%; }
  .row > .off-9-xlarge {
    margin-left: 75%; }
  .row > .col-10-xlarge {
    width: 83.3333333333%; }
  .row > .off-10-xlarge {
    margin-left: 83.3333333333%; }
  .row > .col-11-xlarge {
    width: 91.6666666667%; }
  .row > .off-11-xlarge {
    margin-left: 91.6666666667%; }
  .row > .col-12-xlarge {
    width: 100%; }
  .row > .off-12-xlarge {
    margin-left: 100%; }
  .row.gtr-0 {
    margin-top: 0;
    margin-left: 0rem; }
    .row.gtr-0 > * {
      padding: 0 0 0 0rem; }
    .row.gtr-0.gtr-uniform {
      margin-top: 0rem; }
      .row.gtr-0.gtr-uniform > * {
        padding-top: 0rem; }
  .row.gtr-25 {
    margin-top: 0;
    margin-left: -0.75rem; }
    .row.gtr-25 > * {
      padding: 0 0 0 0.75rem; }
    .row.gtr-25.gtr-uniform {
      margin-top: -0.75rem; }
      .row.gtr-25.gtr-uniform > * {
        padding-top: 0.75rem; }
  .row.gtr-50 {
    margin-top: 0;
    margin-left: -1.5rem; }
    .row.gtr-50 > * {
      padding: 0 0 0 1.5rem; }
    .row.gtr-50.gtr-uniform {
      margin-top: -1.5rem; }
      .row.gtr-50.gtr-uniform > * {
        padding-top: 1.5rem; }
  .row {
    margin-top: 0;
    margin-left: -3rem; }
    .row > * {
      padding: 0 0 0 3rem; }
    .row.gtr-uniform {
      margin-top: -3rem; }
      .row.gtr-uniform > * {
        padding-top: 3rem; }
  .row.gtr-150 {
    margin-top: 0;
    margin-left: -4.5rem; }
    .row.gtr-150 > * {
      padding: 0 0 0 4.5rem; }
    .row.gtr-150.gtr-uniform {
      margin-top: -4.5rem; }
      .row.gtr-150.gtr-uniform > * {
        padding-top: 4.5rem; }
  .row.gtr-200 {
    margin-top: 0;
    margin-left: -6rem; }
    .row.gtr-200 > * {
      padding: 0 0 0 6rem; }
    .row.gtr-200.gtr-uniform {
      margin-top: -6rem; }
      .row.gtr-200.gtr-uniform > * {
        padding-top: 6rem; } }
@media screen and (max-width: 1280px) {
  .row {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box; }
    .row > * {
      box-sizing: border-box; }
    .row.gtr-uniform > * > :last-child {
      margin-bottom: 0; }

  .row > .imp-large {
    order: -1; }
  .row > .col-1-large {
    width: 8.3333333333%; }
  .row > .off-1-large {
    margin-left: 8.3333333333%; }
  .row > .col-2-large {
    width: 16.6666666667%; }
  .row > .off-2-large {
    margin-left: 16.6666666667%; }
  .row > .col-3-large {
    width: 25%; }
  .row > .off-3-large {
    margin-left: 25%; }
  .row > .col-4-large {
    width: 33.3333333333%; }
  .row > .off-4-large {
    margin-left: 33.3333333333%; }
  .row > .col-5-large {
    width: 41.6666666667%; }
  .row > .off-5-large {
    margin-left: 41.6666666667%; }
  .row > .col-6-large {
    width: 50%; }
  .row > .off-6-large {
    margin-left: 50%; }
  .row > .col-7-large {
    width: 58.3333333333%; }
  .row > .off-7-large {
    margin-left: 58.3333333333%; }
  .row > .col-8-large {
    width: 66.6666666667%; }
  .row > .off-8-large {
    margin-left: 66.6666666667%; }
  .row > .col-9-large {
    width: 75%; }
  .row > .off-9-large {
    margin-left: 75%; }
  .row > .col-10-large {
    width: 83.3333333333%; }
  .row > .off-10-large {
    margin-left: 83.3333333333%; }
  .row > .col-11-large {
    width: 91.6666666667%; }
  .row > .off-11-large {
    margin-left: 91.6666666667%; }
  .row > .col-12-large {
    width: 100%; }
  .row > .off-12-large {
    margin-left: 100%; }
  .row.gtr-0 {
    margin-top: 0;
    margin-left: 0rem; }
    .row.gtr-0 > * {
      padding: 0 0 0 0rem; }
    .row.gtr-0.gtr-uniform {
      margin-top: 0rem; }
      .row.gtr-0.gtr-uniform > * {
        padding-top: 0rem; }
  .row.gtr-25 {
    margin-top: 0;
    margin-left: -0.375rem; }
    .row.gtr-25 > * {
      padding: 0 0 0 0.375rem; }
    .row.gtr-25.gtr-uniform {
      margin-top: -0.375rem; }
      .row.gtr-25.gtr-uniform > * {
        padding-top: 0.375rem; }
  .row.gtr-50 {
    margin-top: 0;
    margin-left: -0.75rem; }
    .row.gtr-50 > * {
      padding: 0 0 0 0.75rem; }
    .row.gtr-50.gtr-uniform {
      margin-top: -0.75rem; }
      .row.gtr-50.gtr-uniform > * {
        padding-top: 0.75rem; }
  .row {
    margin-top: 0;
    margin-left: -1.5rem; }
    .row > * {
      padding: 0 0 0 1.5rem; }
    .row.gtr-uniform {
      margin-top: -1.5rem; }
      .row.gtr-uniform > * {
        padding-top: 1.5rem; }
  .row.gtr-150 {
    margin-top: 0;
    margin-left: -2.25rem; }
    .row.gtr-150 > * {
      padding: 0 0 0 2.25rem; }
    .row.gtr-150.gtr-uniform {
      margin-top: -2.25rem; }
      .row.gtr-150.gtr-uniform > * {
        padding-top: 2.25rem; }
  .row.gtr-200 {
    margin-top: 0;
    margin-left: -3rem; }
    .row.gtr-200 > * {
      padding: 0 0 0 3rem; }
    .row.gtr-200.gtr-uniform {
      margin-top: -3rem; }
      .row.gtr-200.gtr-uniform > * {
        padding-top: 3rem; } }
@media screen and (max-width: 980px) {
  .row {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box; }
    .row > * {
      box-sizing: border-box; }
    .row.gtr-uniform > * > :last-child {
      margin-bottom: 0; }

  .row > .imp-medium {
    order: -1; }
  .row > .col-1-medium {
    width: 8.3333333333%; }
  .row > .off-1-medium {
    margin-left: 8.3333333333%; }
  .row > .col-2-medium {
    width: 16.6666666667%; }
  .row > .off-2-medium {
    margin-left: 16.6666666667%; }
  .row > .col-3-medium {
    width: 25%; }
  .row > .off-3-medium {
    margin-left: 25%; }
  .row > .col-4-medium {
    width: 33.3333333333%; }
  .row > .off-4-medium {
    margin-left: 33.3333333333%; }
  .row > .col-5-medium {
    width: 41.6666666667%; }
  .row > .off-5-medium {
    margin-left: 41.6666666667%; }
  .row > .col-6-medium {
    width: 50%; }
  .row > .off-6-medium {
    margin-left: 50%; }
  .row > .col-7-medium {
    width: 58.3333333333%; }
  .row > .off-7-medium {
    margin-left: 58.3333333333%; }
  .row > .col-8-medium {
    width: 66.6666666667%; }
  .row > .off-8-medium {
    margin-left: 66.6666666667%; }
  .row > .col-9-medium {
    width: 75%; }
  .row > .off-9-medium {
    margin-left: 75%; }
  .row > .col-10-medium {
    width: 83.3333333333%; }
  .row > .off-10-medium {
    margin-left: 83.3333333333%; }
  .row > .col-11-medium {
    width: 91.6666666667%; }
  .row > .off-11-medium {
    margin-left: 91.6666666667%; }
  .row > .col-12-medium {
    width: 100%; }
  .row > .off-12-medium {
    margin-left: 100%; }
  .row.gtr-0 {
    margin-top: 0;
    margin-left: 0rem; }
    .row.gtr-0 > * {
      padding: 0 0 0 0rem; }
    .row.gtr-0.gtr-uniform {
      margin-top: 0rem; }
      .row.gtr-0.gtr-uniform > * {
        padding-top: 0rem; }
  .row.gtr-25 {
    margin-top: 0;
    margin-left: -0.375rem; }
    .row.gtr-25 > * {
      padding: 0 0 0 0.375rem; }
    .row.gtr-25.gtr-uniform {
      margin-top: -0.375rem; }
      .row.gtr-25.gtr-uniform > * {
        padding-top: 0.375rem; }
  .row.gtr-50 {
    margin-top: 0;
    margin-left: -0.75rem; }
    .row.gtr-50 > * {
      padding: 0 0 0 0.75rem; }
    .row.gtr-50.gtr-uniform {
      margin-top: -0.75rem; }
      .row.gtr-50.gtr-uniform > * {
        padding-top: 0.75rem; }
  .row {
    margin-top: 0;
    margin-left: -1.5rem; }
    .row > * {
      padding: 0 0 0 1.5rem; }
    .row.gtr-uniform {
      margin-top: -1.5rem; }
      .row.gtr-uniform > * {
        padding-top: 1.5rem; }
  .row.gtr-150 {
    margin-top: 0;
    margin-left: -2.25rem; }
    .row.gtr-150 > * {
      padding: 0 0 0 2.25rem; }
    .row.gtr-150.gtr-uniform {
      margin-top: -2.25rem; }
      .row.gtr-150.gtr-uniform > * {
        padding-top: 2.25rem; }
  .row.gtr-200 {
    margin-top: 0;
    margin-left: -3rem; }
    .row.gtr-200 > * {
      padding: 0 0 0 3rem; }
    .row.gtr-200.gtr-uniform {
      margin-top: -3rem; }
      .row.gtr-200.gtr-uniform > * {
        padding-top: 3rem; } }
@media screen and (max-width: 736px) {
  .row {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box; }
    .row > * {
      box-sizing: border-box; }
    .row.gtr-uniform > * > :last-child {
      margin-bottom: 0; }

  .row > .imp-small {
    order: -1; }
  .row > .col-1-small {
    width: 8.3333333333%; }
  .row > .off-1-small {
    margin-left: 8.3333333333%; }
  .row > .col-2-small {
    width: 16.6666666667%; }
  .row > .off-2-small {
    margin-left: 16.6666666667%; }
  .row > .col-3-small {
    width: 25%; }
  .row > .off-3-small {
    margin-left: 25%; }
  .row > .col-4-small {
    width: 33.3333333333%; }
  .row > .off-4-small {
    margin-left: 33.3333333333%; }
  .row > .col-5-small {
    width: 41.6666666667%; }
  .row > .off-5-small {
    margin-left: 41.6666666667%; }
  .row > .col-6-small {
    width: 50%; }
  .row > .off-6-small {
    margin-left: 50%; }
  .row > .col-7-small {
    width: 58.3333333333%; }
  .row > .off-7-small {
    margin-left: 58.3333333333%; }
  .row > .col-8-small {
    width: 66.6666666667%; }
  .row > .off-8-small {
    margin-left: 66.6666666667%; }
  .row > .col-9-small {
    width: 75%; }
  .row > .off-9-small {
    margin-left: 75%; }
  .row > .col-10-small {
    width: 83.3333333333%; }
  .row > .off-10-small {
    margin-left: 83.3333333333%; }
  .row > .col-11-small {
    width: 91.6666666667%; }
  .row > .off-11-small {
    margin-left: 91.6666666667%; }
  .row > .col-12-small {
    width: 100%; }
  .row > .off-12-small {
    margin-left: 100%; }
  .row.gtr-0 {
    margin-top: 0;
    margin-left: 0rem; }
    .row.gtr-0 > * {
      padding: 0 0 0 0rem; }
    .row.gtr-0.gtr-uniform {
      margin-top: 0rem; }
      .row.gtr-0.gtr-uniform > * {
        padding-top: 0rem; }
  .row.gtr-25 {
    margin-top: 0;
    margin-left: -0.3125rem; }
    .row.gtr-25 > * {
      padding: 0 0 0 0.3125rem; }
    .row.gtr-25.gtr-uniform {
      margin-top: -0.3125rem; }
      .row.gtr-25.gtr-uniform > * {
        padding-top: 0.3125rem; }
  .row.gtr-50 {
    margin-top: 0;
    margin-left: -0.625rem; }
    .row.gtr-50 > * {
      padding: 0 0 0 0.625rem; }
    .row.gtr-50.gtr-uniform {
      margin-top: -0.625rem; }
      .row.gtr-50.gtr-uniform > * {
        padding-top: 0.625rem; }
  .row {
    margin-top: 0;
    margin-left: -1.25rem; }
    .row > * {
      padding: 0 0 0 1.25rem; }
    .row.gtr-uniform {
      margin-top: -1.25rem; }
      .row.gtr-uniform > * {
        padding-top: 1.25rem; }
  .row.gtr-150 {
    margin-top: 0;
    margin-left: -1.875rem; }
    .row.gtr-150 > * {
      padding: 0 0 0 1.875rem; }
    .row.gtr-150.gtr-uniform {
      margin-top: -1.875rem; }
      .row.gtr-150.gtr-uniform > * {
        padding-top: 1.875rem; }
  .row.gtr-200 {
    margin-top: 0;
    margin-left: -2.5rem; }
    .row.gtr-200 > * {
      padding: 0 0 0 2.5rem; }
    .row.gtr-200.gtr-uniform {
      margin-top: -2.5rem; }
      .row.gtr-200.gtr-uniform > * {
        padding-top: 2.5rem; } }
@media screen and (max-width: 480px) {
  .row {
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box; }
    .row > * {
      box-sizing: border-box; }
    .row.gtr-uniform > * > :last-child {
      margin-bottom: 0; }

  .row > .imp-xsmall {
    order: -1; }
  .row > .col-1-xsmall {
    width: 8.3333333333%; }
  .row > .off-1-xsmall {
    margin-left: 8.3333333333%; }
  .row > .col-2-xsmall {
    width: 16.6666666667%; }
  .row > .off-2-xsmall {
    margin-left: 16.6666666667%; }
  .row > .col-3-xsmall {
    width: 25%; }
  .row > .off-3-xsmall {
    margin-left: 25%; }
  .row > .col-4-xsmall {
    width: 33.3333333333%; }
  .row > .off-4-xsmall {
    margin-left: 33.3333333333%; }
  .row > .col-5-xsmall {
    width: 41.6666666667%; }
  .row > .off-5-xsmall {
    margin-left: 41.6666666667%; }
  .row > .col-6-xsmall {
    width: 50%; }
  .row > .off-6-xsmall {
    margin-left: 50%; }
  .row > .col-7-xsmall {
    width: 58.3333333333%; }
  .row > .off-7-xsmall {
    margin-left: 58.3333333333%; }
  .row > .col-8-xsmall {
    width: 66.6666666667%; }
  .row > .off-8-xsmall {
    margin-left: 66.6666666667%; }
  .row > .col-9-xsmall {
    width: 75%; }
  .row > .off-9-xsmall {
    margin-left: 75%; }
  .row > .col-10-xsmall {
    width: 83.3333333333%; }
  .row > .off-10-xsmall {
    margin-left: 83.3333333333%; }
  .row > .col-11-xsmall {
    width: 91.6666666667%; }
  .row > .off-11-xsmall {
    margin-left: 91.6666666667%; }
  .row > .col-12-xsmall {
    width: 100%; }
  .row > .off-12-xsmall {
    margin-left: 100%; }
  .row.gtr-0 {
    margin-top: 0;
    margin-left: 0rem; }
    .row.gtr-0 > * {
      padding: 0 0 0 0rem; }
    .row.gtr-0.gtr-uniform {
      margin-top: 0rem; }
      .row.gtr-0.gtr-uniform > * {
        padding-top: 0rem; }
  .row.gtr-25 {
    margin-top: 0;
    margin-left: -0.3125rem; }
    .row.gtr-25 > * {
      padding: 0 0 0 0.3125rem; }
    .row.gtr-25.gtr-uniform {
      margin-top: -0.3125rem; }
      .row.gtr-25.gtr-uniform > * {
        padding-top: 0.3125rem; }
  .row.gtr-50 {
    margin-top: 0;
    margin-left: -0.625rem; }
    .row.gtr-50 > * {
      padding: 0 0 0 0.625rem; }
    .row.gtr-50.gtr-uniform {
      margin-top: -0.625rem; }
      .row.gtr-50.gtr-uniform > * {
        padding-top: 0.625rem; }
  .row {
    margin-top: 0;
    margin-left: -1.25rem; }
    .row > * {
      padding: 0 0 0 1.25rem; }
    .row.gtr-uniform {
      margin-top: -1.25rem; }
      .row.gtr-uniform > * {
        padding-top: 1.25rem; }
  .row.gtr-150 {
    margin-top: 0;
    margin-left: -1.875rem; }
    .row.gtr-150 > * {
      padding: 0 0 0 1.875rem; }
    .row.gtr-150.gtr-uniform {
      margin-top: -1.875rem; }
      .row.gtr-150.gtr-uniform > * {
        padding-top: 1.875rem; }
  .row.gtr-200 {
    margin-top: 0;
    margin-left: -2.5rem; }
    .row.gtr-200 > * {
      padding: 0 0 0 2.5rem; }
    .row.gtr-200.gtr-uniform {
      margin-top: -2.5rem; }
      .row.gtr-200.gtr-uniform > * {
        padding-top: 2.5rem; } }
/* Icon */
.icon {
  text-decoration: none;
  border-bottom: none;
  position: relative; }
  .icon:before {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-transform: none !important; }
  .icon > .label {
    display: none; }

/* Icons */
ul.icons {
  cursor: default;
  list-style: none;
  padding-left: 0; }
  ul.icons li {
    display: inline-block;
    padding: 0 1rem 0 0; }
    ul.icons li:last-child {
      padding-right: 0; }
    ul.icons li .icon:before {
      font-size: 2rem; }

/* Image */
.image {
  border-radius: 4px;
  border: 0;
  display: inline-block;
  position: relative; }
  .image img {
    border-radius: 4px;
    display: block; }
  .image.left, .image.right {
    max-width: 40%; }
    .image.left img, .image.right img {
      width: 100%; }
  .image.left {
    float: left;
    margin: 0 2rem 2rem 0;
    top: 0.25rem; }
  .image.right {
    float: right;
    margin: 0 0 2rem 2rem;
    top: 0.25rem; }
  .image.fit {
    display: block;
    margin: 0 0 2rem 0;
    width: 100%; }
    .image.fit img {
      width: 100%; }
  .image.main {
    display: block;
    margin: 0 0 3rem 0;
    width: 100%; }
    .image.main img {
      width: 100%; }

/* Wrapper */
.wrapper {
  padding: 8rem 0 6rem 0 ;
  position: relative;
  z-index: 1; }
  @media screen and (max-width: 1280px) {
    .wrapper {
      padding: 4rem 0 2rem 0 ; } }
  @media screen and (max-width: 736px) {
    .wrapper {
      padding: 3rem 0 1rem 0 ; } }
  @media screen and (max-width: 480px) {
    .wrapper {
      padding: 2rem 0 0.1rem 0 ; } }

/* Banner */
#banner {
  -ms-flex-align: center;
  -ms-flex-pack: center;
  background-color: #111111;
  color: rgba(255, 255, 255, 0.5);
  -moz-align-items: center;
  -webkit-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-justify-content: center;
  -webkit-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
 // background-image: url("../../images/banner.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top: 0;
  display: -ms-flexbox;
  height: 35rem !important;
  min-height: 35rem;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%; }
  #banner input, #banner select, #banner textarea {
    color: #ffffff; }
  #banner a {
    color: <? echo $conf['primario']; ?>; }
  #banner strong, #banner b {
    color: #ffffff; }
  #banner h1, #banner h2, #banner h3, #banner h4, #banner h5, #banner h6 {
    color: #ffffff; }
  #banner blockquote {
    border-left-color: rgba(255, 255, 255, 0.25); }
  #banner code {
    background: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
  #banner hr {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #banner input[type="submit"],
  #banner input[type="reset"],
  #banner input[type="button"],
  #banner button,
  #banner .button {
    background-color: transparent;
    box-shadow: inset 0 0 0 1px #ffffff;
    color: #ffffff !important; }
    #banner input[type="submit"]:hover,
    #banner input[type="reset"]:hover,
    #banner input[type="button"]:hover,
    #banner button:hover,
    #banner .button:hover {
      box-shadow: inset 0 0 0 1px <? echo $conf['primario']; ?>;
      color: <? echo $conf['primario']; ?> !important; }
      #banner input[type="submit"]:hover:active,
      #banner input[type="reset"]:hover:active,
      #banner input[type="button"]:hover:active,
      #banner button:hover:active,
      #banner .button:hover:active {
        background-color: rgba(206, 27, 40, 0.25); }
    #banner input[type="submit"].primary,
    #banner input[type="reset"].primary,
    #banner input[type="button"].primary,
    #banner button.primary,
    #banner .button.primary {
      box-shadow: none;
      background-color: <? echo $conf['primario']; ?>;
      color: #ffffff !important; }
      #banner input[type="submit"].primary:hover,
      #banner input[type="reset"].primary:hover,
      #banner input[type="button"].primary:hover,
      #banner button.primary:hover,
      #banner .button.primary:hover {
        background-color: <? echo $conf['secundario']; ?>;
        box-shadow: none; }
        #banner input[type="submit"].primary:hover:active,
        #banner input[type="reset"].primary:hover:active,
        #banner input[type="button"].primary:hover:active,
        #banner button.primary:hover:active,
        #banner .button.primary:hover:active {
          background-color: #b71824; }
  #banner label {
    color: #ffffff; }
  #banner input[type="text"],
  #banner input[type="password"],
  #banner input[type="email"],
  #banner input[type="tel"],
  #banner input[type="search"],
  #banner input[type="url"],
  #banner select,
  #banner textarea {
    background-color: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
    #banner input[type="text"]:focus,
    #banner input[type="password"]:focus,
    #banner input[type="email"]:focus,
    #banner input[type="tel"]:focus,
    #banner input[type="search"]:focus,
    #banner input[type="url"]:focus,
    #banner select:focus,
    #banner textarea:focus {
      border-color: <? echo $conf['primario']; ?>;
      box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #banner select {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
    #banner select option {
      color: rgba(255, 255, 255, 0.5);
      background-color: #111111; }
  #banner input[type="checkbox"] + label,
  #banner input[type="radio"] + label {
    color: rgba(255, 255, 255, 0.5); }
    #banner input[type="checkbox"] + label:before,
    #banner input[type="radio"] + label:before {
      background: rgba(255, 255, 255, 0.075);
      border-color: rgba(255, 255, 255, 0.25); }
  #banner input[type="checkbox"]:checked + label:before,
  #banner input[type="radio"]:checked + label:before {
    background-color: <? echo $conf['primario']; ?>;
    border-color: <? echo $conf['primario']; ?>;
    color: #ffffff; }
  #banner input[type="checkbox"]:focus + label:before,
  #banner input[type="radio"]:focus + label:before {
    border-color: <? echo $conf['primario']; ?>;
    box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #banner ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #banner :-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #banner ::-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #banner :-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #banner ul.alt li {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #banner table tbody tr {
    border-color: rgba(255, 255, 255, 0.25); }
    #banner table tbody tr:nth-child(2n + 1) {
      background-color: rgba(255, 255, 255, 0.075); }
  #banner table th {
    color: #ffffff; }
  #banner table thead {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #banner table tfoot {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #banner table.alt tbody tr td {
    border-color: rgba(255, 255, 255, 0.25); }
  #banner .highlights .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
  #banner .testimonials .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
    #banner .testimonials .content .credit strong {
      color: <? echo $conf['primario']; ?>; }
  #banner > .inner {
    -moz-transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -ms-transform: scale(1.0);
    transform: scale(1.0);
    -moz-transition: opacity 1s ease, -moz-transform 1s ease;
    -webkit-transition: opacity 1s ease, -webkit-transform 1s ease;
    -ms-transition: opacity 1s ease, -ms-transform 1s ease;
    transition: opacity 1s ease, transform 1s ease;
    opacity: 1;
    position: relative;
    z-index: 3; }
    #banner > .inner > :last-child {
      margin-bottom: 0; }
  #banner h1 {
    font-size: 4rem;
    margin-bottom: 1rem; }
  #banner p {
    font-size: 1.5rem; }
  #banner a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none; }
    #banner a:hover {
      color: #ffffff; }
  #banner video {
    -moz-transform: translateX(50%) translateY(50%);
    -webkit-transform: translateX(50%) translateY(50%);
    -ms-transform: translateX(50%) translateY(50%);
    transform: translateX(50%) translateY(50%);
    bottom: 50%;
    height: auto;
    min-height: 100%;
    min-width: 100%;
    overflow: hidden;
    position: absolute;
    right: 50%;
    width: auto; }
  #banner:before {
    -moz-transition: opacity 3s ease;
    -webkit-transition: opacity 3s ease;
    -ms-transition: opacity 3s ease;
    transition: opacity 3s ease;
    -moz-transition-delay: 1.25s;
    -webkit-transition-delay: 1.25s;
    -ms-transition-delay: 1.25s;
    transition-delay: 1.25s;
    background: #111111;
    content: '';
    display: block;
    height: 100%;
    left: 0;
    opacity: 0.45;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1; }
  #banner:after {
    background: linear-gradient(135deg, <? echo $conf['primario']; ?> 0%, #111111 74%);
    content: ' ';
    display: block;
    height: 100%;
    left: 0;
    opacity: 0.6;
    position: absolute;
    top: 0;
    webkit-linear-gradientidth: 100%;
    width: 100%;
    z-index: 1; }
  #banner.small {
    height: 30vh !important;
    min-height: 30vh; }
  @media screen and (max-width: 1280px) {
    #banner video {
      display: none; } }
  @media screen and (max-width: 736px) {
    #banner {
      height: auto !important;
      min-height: 0;
      padding: 4rem 2rem 4rem 2rem; }
      #banner .inner {
        width: 100%; }
      #banner h1 {
        font-size: 1.75rem;
        margin-bottom: 0.5rem;
        padding-bottom: 0; }
      #banner p {
        font-size: 1.25rem; }
      #banner br {
        display: none; }
      #banner .button {
        width: 100%; } }
  @media screen and (max-width: 480px) {
    #banner p {
      font-size: 1rem; } }
  body.is-preload #banner .inner {
    -moz-transform: scale(0.99);
    -webkit-transform: scale(0.99);
    -ms-transform: scale(0.99);
    transform: scale(0.99);
    opacity: 0; }
  body.is-preload #banner:before {
    opacity: 1; }

/* CTA */
#cta {
  background-color: <? echo $conf['primario']; ?>;
  color: rgba(255, 255, 255, 0.75);
  background-attachment: fixed;
  background-image: linear-gradient(rgba(206, 27, 40, 0.25), rgba(206, 27, 40, 0.25)), url(../../images/cta01.jpg);
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  text-align: center;
  z-index: 1; }
  #cta input, #cta select, #cta textarea {
    color: #ffffff; }
  #cta a {
    color: #ffffff; }
  #cta strong, #cta b {
    color: #ffffff; }
  #cta h1, #cta h2, #cta h3, #cta h4, #cta h5, #cta h6 {
    color: #ffffff; }
  #cta blockquote {
    border-left-color: rgba(255, 255, 255, 0.25); }
  #cta code {
    background: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
  #cta hr {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #cta input[type="submit"],
  #cta input[type="reset"],
  #cta input[type="button"],
  #cta button,
  #cta .button {
    background-color: transparent;
    box-shadow: inset 0 0 0 1px #ffffff;
    color: #ffffff !important; }
    #cta input[type="submit"]:hover,
    #cta input[type="reset"]:hover,
    #cta input[type="button"]:hover,
    #cta button:hover,
    #cta .button:hover {
      background-color: rgba(255, 255, 255, 0.1); }
      #cta input[type="submit"]:hover:active,
      #cta input[type="reset"]:hover:active,
      #cta input[type="button"]:hover:active,
      #cta button:hover:active,
      #cta .button:hover:active {
        background-color: rgba(255, 255, 255, 0.25); }
    #cta input[type="submit"].primary,
    #cta input[type="reset"].primary,
    #cta input[type="button"].primary,
    #cta button.primary,
    #cta .button.primary {
      box-shadow: none;
      background-color: #ffffff;
      color: <? echo $conf['primario']; ?> !important; }
      #cta input[type="submit"].primary:hover,
      #cta input[type="reset"].primary:hover,
      #cta input[type="button"].primary:hover,
      #cta button.primary:hover,
      #cta .button.primary:hover {
        background-color: rgba(255, 255, 255, 0.875);
        box-shadow: none; }
        #cta input[type="submit"].primary:hover:active,
        #cta input[type="reset"].primary:hover:active,
        #cta input[type="button"].primary:hover:active,
        #cta button.primary:hover:active,
        #cta .button.primary:hover:active {
          background-color: rgba(255, 255, 255, 0.5); }
  #cta label {
    color: #ffffff; }
  #cta input[type="text"],
  #cta input[type="password"],
  #cta input[type="email"],
  #cta input[type="tel"],
  #cta input[type="search"],
  #cta input[type="url"],
  #cta select,
  #cta textarea {
    background-color: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
    #cta input[type="text"]:focus,
    #cta input[type="password"]:focus,
    #cta input[type="email"]:focus,
    #cta input[type="tel"]:focus,
    #cta input[type="search"]:focus,
    #cta input[type="url"]:focus,
    #cta select:focus,
    #cta textarea:focus {
      border-color: #ffffff;
      box-shadow: 0 0 0 1px #ffffff; }
  #cta select {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
    #cta select option {
      color: rgba(255, 255, 255, 0.75);
      background-color: <? echo $conf['primario']; ?>; }
  #cta input[type="checkbox"] + label,
  #cta input[type="radio"] + label {
    color: rgba(255, 255, 255, 0.75); }
    #cta input[type="checkbox"] + label:before,
    #cta input[type="radio"] + label:before {
      background: rgba(255, 255, 255, 0.075);
      border-color: rgba(255, 255, 255, 0.25); }
  #cta input[type="checkbox"]:checked + label:before,
  #cta input[type="radio"]:checked + label:before {
    background-color: #ffffff;
    border-color: #ffffff;
    color: <? echo $conf['primario']; ?>; }
  #cta input[type="checkbox"]:focus + label:before,
  #cta input[type="radio"]:focus + label:before {
    border-color: #ffffff;
    box-shadow: 0 0 0 1px #ffffff; }
  #cta ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #cta :-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #cta ::-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #cta :-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #cta ul.alt li {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #cta table tbody tr {
    border-color: rgba(255, 255, 255, 0.25); }
    #cta table tbody tr:nth-child(2n + 1) {
      background-color: rgba(255, 255, 255, 0.075); }
  #cta table th {
    color: #ffffff; }
  #cta table thead {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #cta table tfoot {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #cta table.alt tbody tr td {
    border-color: rgba(255, 255, 255, 0.25); }
  #cta .highlights .content {
    background: <? echo $conf['primario']; ?>;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
  #cta .testimonials .content {
    background: <? echo $conf['primario']; ?>;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
    #cta .testimonials .content .credit strong {
      color: <? echo $conf['primario']; ?>; }
  #cta .inner {
    position: relative;
    z-index: 3; }
  @media screen and (max-width: 980px) {
    #cta {
      background-attachment: scroll; } }

/* Footer */
#footer {
  background-color: #111111;
  color: rgba(255, 255, 255, 0.5);
  padding: 8rem 0 6rem 0 ; }
  #footer input, #footer select, #footer textarea {
    color: #ffffff; }
  #footer a {
    color: <? echo $conf['primario']; ?>; }
  #footer strong, #footer b {
    color: #ffffff; }
  #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6 {
    color: #ffffff; }
  #footer blockquote {
    border-left-color: rgba(255, 255, 255, 0.25); }
  #footer code {
    background: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
  #footer hr {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #footer input[type="submit"],
  #footer input[type="reset"],
  #footer input[type="button"],
  #footer button,
  #footer .button {
    background-color: transparent;
    box-shadow: inset 0 0 0 1px #ffffff;
    color: #ffffff !important; }
    #footer input[type="submit"]:hover,
    #footer input[type="reset"]:hover,
    #footer input[type="button"]:hover,
    #footer button:hover,
    #footer .button:hover {
      box-shadow: inset 0 0 0 1px <? echo $conf['primario']; ?>;
      color: <? echo $conf['primario']; ?> !important; }
      #footer input[type="submit"]:hover:active,
      #footer input[type="reset"]:hover:active,
      #footer input[type="button"]:hover:active,
      #footer button:hover:active,
      #footer .button:hover:active {
        background-color: rgba(206, 27, 40, 0.25); }
    #footer input[type="submit"].primary,
    #footer input[type="reset"].primary,
    #footer input[type="button"].primary,
    #footer button.primary,
    #footer .button.primary {
      box-shadow: none;
      background-color: <? echo $conf['primario']; ?>;
      color: #ffffff !important; }
      #footer input[type="submit"].primary:hover,
      #footer input[type="reset"].primary:hover,
      #footer input[type="button"].primary:hover,
      #footer button.primary:hover,
      #footer .button.primary:hover {
        background-color: <? echo $conf['secundario']; ?>;
        box-shadow: none; }
        #footer input[type="submit"].primary:hover:active,
        #footer input[type="reset"].primary:hover:active,
        #footer input[type="button"].primary:hover:active,
        #footer button.primary:hover:active,
        #footer .button.primary:hover:active {
          background-color: #b71824; }
  #footer label {
    color: #ffffff; }
  #footer input[type="text"],
  #footer input[type="password"],
  #footer input[type="email"],
  #footer input[type="tel"],
  #footer input[type="search"],
  #footer input[type="url"],
  #footer select,
  #footer textarea {
    background-color: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
    #footer input[type="text"]:focus,
    #footer input[type="password"]:focus,
    #footer input[type="email"]:focus,
    #footer input[type="tel"]:focus,
    #footer input[type="search"]:focus,
    #footer input[type="url"]:focus,
    #footer select:focus,
    #footer textarea:focus {
      border-color: <? echo $conf['primario']; ?>;
      box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #footer select {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
    #footer select option {
      color: rgba(255, 255, 255, 0.5);
      background-color: #111111; }
  #footer input[type="checkbox"] + label,
  #footer input[type="radio"] + label {
    color: rgba(255, 255, 255, 0.5); }
    #footer input[type="checkbox"] + label:before,
    #footer input[type="radio"] + label:before {
      background: rgba(255, 255, 255, 0.075);
      border-color: rgba(255, 255, 255, 0.25); }
  #footer input[type="checkbox"]:checked + label:before,
  #footer input[type="radio"]:checked + label:before {
    background-color: <? echo $conf['primario']; ?>;
    border-color: <? echo $conf['primario']; ?>;
    color: #ffffff; }
  #footer input[type="checkbox"]:focus + label:before,
  #footer input[type="radio"]:focus + label:before {
    border-color: <? echo $conf['primario']; ?>;
    box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #footer ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #footer :-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #footer ::-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #footer :-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #footer ul.alt li {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #footer table tbody tr {
    border-color: rgba(255, 255, 255, 0.25); }
    #footer table tbody tr:nth-child(2n + 1) {
      background-color: rgba(255, 255, 255, 0.075); }
  #footer table th {
    color: #ffffff; }
  #footer table thead {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #footer table tfoot {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #footer table.alt tbody tr td {
    border-color: rgba(255, 255, 255, 0.25); }
  #footer .highlights .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
  #footer .testimonials .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
    #footer .testimonials .content .credit strong {
      color: <? echo $conf['primario']; ?>; }
  #footer a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none; }
    #footer a:hover {
      color: <? echo $conf['primario']; ?>; }
  #footer .content {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex; }
    #footer .content section {
      width: 25%; }
      #footer .content section:first-child {
        width: 50%;
        padding-right: 4rem; }
      #footer .content section:last-child {
        padding-left: 4rem; }
  #footer .copyright {
    border-top: 1px solid;
    font-size: 0.8rem;
    opacity: 0.5;
    padding: 2rem 0;
    text-align: center; }
  @media screen and (max-width: 1280px) {
    #footer {
      padding: 4rem 0 2rem 0 ; } }
  @media screen and (max-width: 980px) {
    #footer .content {
      -moz-flex-wrap: wrap;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap; }
      #footer .content section {
        width: 50%; }
        #footer .content section:first-child {
          width: 100%;
          padding-right: 0; } }
  @media screen and (max-width: 736px) {
    #footer {
      padding: 3rem 0 1rem 0 ; }
      #footer .content section {
        width: 100%; }
        #footer .content section:last-child {
          padding-left: 0; } }
  @media screen and (max-width: 480px) {
    #footer {
      padding: 2rem 0 0.1rem 0 ; } }

/* Header */
body {
  padding-top: 3.25rem; }
  body:before {
    content: ' ';
    background-image: url('/img/<? echo $conf['backgroundimg']; ?>');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: block;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.05; }

#header {
  -moz-align-items: center;
  -webkit-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -ms-justify-content: space-between;
  justify-content: space-between;
  background: #111111;
  color: rgba(255, 255, 255, 0.5);
  cursor: default;
  height: 3.25rem;
  left: 0;
  line-height: 3.25rem;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 10001; }
  #header > .logo {
    color: #ffffff;
    font-size: 1rem;
    font-weight: 600;
    height: inherit;
    line-height: inherit;
    padding: 0 1.25rem;
    text-decoration: none; }
  #header > nav > a {
    color: inherit;
    display: inline-block;
    padding: 0 0.75rem;
    text-decoration: none; }
    #header > nav > a:hover {
      color: #ffffff; }
    #header > nav > a[href="#menu"] {
      text-decoration: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
      #header > nav > a[href="#menu"]:before {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        text-transform: none !important; }
      #header > nav > a[href="#menu"]:before {
        content: '\f0c9';
        margin: 0 0.5rem 0 0; }
    #header > nav > a + a[href="#menu"]:last-child {
      border-left: solid 1px rgba(255, 255, 255, 0.25);
      margin-left: 0.5rem;
      padding-left: 1.25rem; }
    #header > nav > a:last-child {
      padding-right: 1.25rem; }
    @media screen and (max-width: 736px) {
      #header > nav > a {
        padding: 0 0.5rem; }
        #header > nav > a + a[href="#menu"]:last-child {
          margin-left: 0.25rem;
          padding-left: 1rem; }
        #header > nav > a:last-child {
          padding-right: 1rem; } }

@media screen and (max-width: 980px) {
  body {
    padding-top: 44px; }

  #header {
    height: 44px;
    line-height: 44px; } }
@media screen and (max-width: 480px) {
  #header {
    min-width: 320px; } }
/* Heading */
#heading {
  -ms-flex-align: center;
  -ms-flex-pack: center;
  background-color: #111111;
  color: rgba(255, 255, 255, 0.5);
  -moz-align-items: center;
  -webkit-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -moz-flex;
  display: -webkit-flex;
  display: -ms-flex;
  display: flex;
  -moz-justify-content: center;
  -webkit-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  background-image: linear-gradient(rgba(17, 17, 17, 0.25), rgba(17, 17, 17, 0.25)), url("/img/<? echo $campo['foto']; ?>");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top: 0;
  display: -ms-flexbox;
  height: 15rem !important;
  min-height: 15rem;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%; }
  #heading input, #heading select, #heading textarea {
    color: #ffffff; }
  #heading a {
    color: <? echo $conf['primario']; ?>; }
  #heading strong, #heading b {
    color: #ffffff; }
  #heading h1, #heading h2, #heading h3, #heading h4, #heading h5, #heading h6 {
    color: #ffffff; }
  #heading blockquote {
    border-left-color: rgba(255, 255, 255, 0.25); }
  #heading code {
    background: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
  #heading hr {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #heading input[type="submit"],
  #heading input[type="reset"],
  #heading input[type="button"],
  #heading button,
  #heading .button {
    background-color: transparent;
    box-shadow: inset 0 0 0 1px #ffffff;
    color: #ffffff !important; }
    #heading input[type="submit"]:hover,
    #heading input[type="reset"]:hover,
    #heading input[type="button"]:hover,
    #heading button:hover,
    #heading .button:hover {
      box-shadow: inset 0 0 0 1px <? echo $conf['primario']; ?>;
      color: <? echo $conf['primario']; ?> !important; }
      #heading input[type="submit"]:hover:active,
      #heading input[type="reset"]:hover:active,
      #heading input[type="button"]:hover:active,
      #heading button:hover:active,
      #heading .button:hover:active {
        background-color: rgba(206, 27, 40, 0.25); }
    #heading input[type="submit"].primary,
    #heading input[type="reset"].primary,
    #heading input[type="button"].primary,
    #heading button.primary,
    #heading .button.primary {
      box-shadow: none;
      background-color: <? echo $conf['primario']; ?>;
      color: #ffffff !important; }
      #heading input[type="submit"].primary:hover,
      #heading input[type="reset"].primary:hover,
      #heading input[type="button"].primary:hover,
      #heading button.primary:hover,
      #heading .button.primary:hover {
        background-color: <? echo $conf['secundario']; ?>;
        box-shadow: none; }
        #heading input[type="submit"].primary:hover:active,
        #heading input[type="reset"].primary:hover:active,
        #heading input[type="button"].primary:hover:active,
        #heading button.primary:hover:active,
        #heading .button.primary:hover:active {
          background-color: #b71824; }
  #heading label {
    color: #ffffff; }
  #heading input[type="text"],
  #heading input[type="password"],
  #heading input[type="email"],
  #heading input[type="tel"],
  #heading input[type="search"],
  #heading input[type="url"],
  #heading select,
  #heading textarea {
    background-color: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
    #heading input[type="text"]:focus,
    #heading input[type="password"]:focus,
    #heading input[type="email"]:focus,
    #heading input[type="tel"]:focus,
    #heading input[type="search"]:focus,
    #heading input[type="url"]:focus,
    #heading select:focus,
    #heading textarea:focus {
      border-color: <? echo $conf['primario']; ?>;
      box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #heading select {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
    #heading select option {
      color: rgba(255, 255, 255, 0.5);
      background-color: #111111; }
  #heading input[type="checkbox"] + label,
  #heading input[type="radio"] + label {
    color: rgba(255, 255, 255, 0.5); }
    #heading input[type="checkbox"] + label:before,
    #heading input[type="radio"] + label:before {
      background: rgba(255, 255, 255, 0.075);
      border-color: rgba(255, 255, 255, 0.25); }
  #heading input[type="checkbox"]:checked + label:before,
  #heading input[type="radio"]:checked + label:before {
    background-color: <? echo $conf['primario']; ?>;
    border-color: <? echo $conf['primario']; ?>;
    color: #ffffff; }
  #heading input[type="checkbox"]:focus + label:before,
  #heading input[type="radio"]:focus + label:before {
    border-color: <? echo $conf['primario']; ?>;
    box-shadow: 0 0 0 1px <? echo $conf['primario']; ?>; }
  #heading ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #heading :-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #heading ::-moz-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #heading :-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.4) !important; }
  #heading ul.alt li {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #heading table tbody tr {
    border-color: rgba(255, 255, 255, 0.25); }
    #heading table tbody tr:nth-child(2n + 1) {
      background-color: rgba(255, 255, 255, 0.075); }
  #heading table th {
    color: #ffffff; }
  #heading table thead {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #heading table tfoot {
    border-top-color: rgba(255, 255, 255, 0.25); }
  #heading table.alt tbody tr td {
    border-color: rgba(255, 255, 255, 0.25); }
  #heading .highlights .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
  #heading .testimonials .content {
    background: #111111;
    box-shadow: 0px 0px 4px 1px rgba(255, 255, 255, 0.025); }
    #heading .testimonials .content .credit strong {
      color: <? echo $conf['primario']; ?>; }
  #heading:before {
    background: linear-gradient(135deg, <? echo $conf['primario']; ?> 0%, #111111 74%);
    content: ' ';
    display: block;
    height: 100%;
    left: 0;
    opacity: 0.6;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1; }
  #heading h1 {
    margin-bottom: 0;
    position: relative;
    z-index: 2; }
  @media screen and (max-width: 980px) {
    #heading {
      padding: 2rem; } }

/* Main */
#main .content {
  background: #ffffff;
  border-radius: 4px;
  box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025);
  margin-bottom: 2rem;
  padding: 3rem; }
  @media screen and (max-width: 980px) {
    #main .content {
      padding: 2rem; } }
  @media screen and (max-width: 480px) {
    #main .content {
      padding: 1.5rem; } }

/* Menu */
#menu {
  background-color: #111111;
  color: rgba(255, 255, 255, 0.5);
  -moz-transform: translateX(20rem);
  -webkit-transform: translateX(20rem);
  -ms-transform: translateX(20rem);
  transform: translateX(20rem);
  -moz-transition: -moz-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
  -webkit-transition: -webkit-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
  -ms-transition: -ms-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
  transition: transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
  -webkit-overflow-scrolling: touch;
  box-shadow: none;
  height: 100%;
  max-width: 80%;
  overflow-y: auto;
  padding: 3rem 2rem;
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  width: 20rem;
  z-index: 10002; }
  #menu input, #menu select, #menu textarea {
    color: #ffffff; }
  #menu a {
    color: <? echo $conf['primario']; ?>; }
  #menu strong, #menu b {
    color: #ffffff; }
  #menu h1, #menu h2, #menu h3, #menu h4, #menu h5, #menu h6 {
    color: #ffffff; }
  #menu blockquote {
    border-left-color: rgba(255, 255, 255, 0.25); }
  #menu code {
    background: rgba(255, 255, 255, 0.075);
    border-color: rgba(255, 255, 255, 0.25); }
  #menu hr {
    border-bottom-color: rgba(255, 255, 255, 0.25); }
  #menu input[type="submit"],
  #menu input[type="reset"],
  #menu input[type="button"],
  #menu button,
  #menu .button {
    background-color: transparent;
    box-shadow: inset 0 0 0 1px #ffffff;
    color: #ffffff !important; }
    #menu input[type="submit"]:hover,
    #menu input[type="reset"]:hover,
    #menu input[type="button"]:hover,
    #menu button:hover,
    #menu .button:hover {
      box-shadow: inset 0 0 0 1px <? echo $conf['primario']; ?>;
      color: <? echo $conf['primario']; ?> !important; }
      #menu input[type="submit"]:hover:active,
      #menu input[type="reset"]:hover:active,
      #menu input[type="button"]:hover:active,
      #menu button:hover:active,
      #menu .button:hover:active {
        background-color: rgba(206, 27, 40, 0.25); }
    #menu input[type="submit"].primary,
    #menu input[type="reset"].primary,
    #menu input[type="button"].primary,
    #menu button.primary,
    #menu .button.primary {
      box-shadow: none;
      background-color: <? echo $conf['primario']; ?>;
      color: #ffffff !important; }
      #menu input[type="submit"].primary:hover,
      #menu input[type="reset"].primary:hover,
      #menu input[type="button"].primary:hover,
      #menu button.primary:hover,
      #menu .button.primary:hover {
        background-color: <? echo $conf['secundario']; ?>;
        box-shadow: none; }
        #menu input[type="submit"].primary:hover:active,
        #menu input[type="reset"].primary:hover:active,
        #menu input[type="button"].primary:hover:active,
        #menu button.primary:hover:active,
        #menu .button.primary:hover:active {
          background-color: #b71824; }
  #menu > ul {
    margin: 0 0 1rem 0; }
    #menu > ul.links {
      list-style: none;
      padding: 0; }
      #menu > ul.links > li {
        padding: 0; }
        #menu > ul.links > li > a {
          border: 0;
          border-top: solid 1px rgba(255, 255, 255, 0.25);
          color: inherit;
          display: block;
          line-height: 3.5rem;
          text-decoration: none; }
          #menu > ul.links > li > a:hover {
            color: #ffffff; }
        #menu > ul.links > li:first-child > a {
          border-top: 0; }
  #menu .close {
    text-decoration: none;
    -moz-transition: color 0.2s ease-in-out;
    -webkit-transition: color 0.2s ease-in-out;
    -ms-transition: color 0.2s ease-in-out;
    transition: color 0.2s ease-in-out;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    border: 0;
    color: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    display: block;
    height: 3.25rem;
    line-height: 3.25rem;
    padding-right: 1.25rem;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    vertical-align: middle;
    width: 7rem; }
    #menu .close:before {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      font-family: FontAwesome;
      font-style: normal;
      font-weight: normal;
      text-transform: none !important; }
    #menu .close:before {
      content: '\f00d';
      font-size: 1.25rem; }
    #menu .close:hover {
      color: #ffffff; }
    @media screen and (max-width: 736px) {
      #menu .close {
        height: 4rem;
        line-height: 4rem; } }
  @media screen and (max-width: 736px) {
    #menu {
      padding: 2.5rem 1.75rem; } }

body.is-menu-visible #menu {
  -moz-transform: translateX(0);
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
  box-shadow: 0 0 1.5rem 0 rgba(0, 0, 0, 0.2);
  visibility: visible; }