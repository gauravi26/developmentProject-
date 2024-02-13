document.addEventListener("DOMContentLoaded", function () {
    const reportThemeForm = document.getElementById('reportThemeForm');
    const reportGridContainer = document.getElementById('report-container');
    const reportTable = document.getElementById('report-table');
    const reportHeader = document.getElementById('report-header');
    
    const tableHeaders = document.querySelectorAll('th');

    const thPaddingInput = document.getElementById('th_padding');
    const thBorderInput = document.getElementById('th_border');
    const thBackgroundColorInput = document.getElementById('th_background-color');
    const thColorInput = document.getElementById('th_color');
    const thFontWeightInput = document.getElementById('th_font-weight');
    const thFontSizeInput = document.getElementById('th_font-size');

    

    function updateGridContainerProperties() {
        reportGridContainer.style.backgroundColor = reportThemeForm['.report-container_background-color'].value;
        reportGridContainer.style.grid = reportThemeForm['.report-container_grid'].value;
        reportGridContainer.style.gridTemplateColumns = reportThemeForm['.report-container_grid-template-columns'].value;
        reportGridContainer.style.gridGap = reportThemeForm['.report-container_grid-gap'].value;
        reportGridContainer.style.justifyContent = reportThemeForm['.report-container_justify-content'].value;
        reportGridContainer.style.alignItems = reportThemeForm['.report-container_align-items'].value;
        reportGridContainer.style.borderRadius = reportThemeForm['.report-container_border-radius'].value;
        reportGridContainer.style.padding = reportThemeForm['.report-container_padding'].value;
        reportGridContainer.style.fontFamily = reportThemeForm['.report-container_font-family'].value;
        reportGridContainer.style.width = reportThemeForm['.report-container_width'].value;
        reportGridContainer.style.margin = reportThemeForm['.report-container_margin'].value;
       
    }
     //Function for Header 
     
     function updateHeader(){
         
         reportHeader.style.textAlign = reportThemeForm['.report-container h2_text-align'].value;
         reportHeader.style.gridColumn = reportThemeForm['.report-container h2_grid-column'].value;
         reportHeader.style.color = reportThemeForm['.report-container h2_color'].value;
         reportHeader.style.fontSize = reportThemeForm['.report-container h2_font-size'].value;
     
         
     }
     
     
     
      //Function for Table   
     function updateTableProperties()  {
        
        reportTable.style.width = reportThemeForm['.report-table _width'].value;
         reportTable.style.borderCollapse = reportThemeForm['.report-table _border-collapse'].value;
    reportTable.style.borderSpacing = reportThemeForm['.report-table _border-spacing'].value;
    reportTable.style.marginTop = reportThemeForm['.report-table _margin-top'].value;
    reportTable.style.backgroundColor = reportThemeForm['.report-table _background-color'].value;

    }
    
function updateTableHeader() {
    const paddingValue = thPaddingInput.value;
    const borderValue = thBorderInput.value;
    const backgroundColorValue = thBackgroundColorInput.value;
    const colorValue = thColorInput.value;
    const fontWeightValue = thFontWeightInput.value;
    const fontSizeValue = thFontSizeInput.value;

    tableHeaders.forEach(th => {
        th.style.padding = paddingValue;
        th.style.border = borderValue;
        th.style.backgroundColor = backgroundColorValue;
        th.style.color = colorValue;
        th.style.fontWeight = fontWeightValue;
        th.style.fontSize = fontSizeValue;
    });
}

    // Adding Listener Grid Container 
    reportThemeForm['.report-container_grid'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_grid-template-columns'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_grid-gap'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_justify-content'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_align-items'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_background-color'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_border-radius'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_padding'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_font-family'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_width'].addEventListener("input", updateGridContainerProperties);
    reportThemeForm['.report-container_margin'].addEventListener("input", updateGridContainerProperties);
  
  
    // Adding Listener Report Header
    reportThemeForm['.report-container h2_text-align'].addEventListener('input',updateHeader);
    reportThemeForm['.report-container h2_grid-column'].addEventListener('input', updateHeader);
    reportThemeForm['.report-container h2_color'].addEventListener('input', updateHeader);
    reportThemeForm['.report-container h2_font-size'].addEventListener('input', updateHeader);


  
  
     // Adding Listener Table 
     
   reportThemeForm['.report-table _width'].addEventListener("input", updateTableProperties); 
   reportThemeForm['.report-table _border-collapse'].addEventListener("input", updateTableProperties);
   reportThemeForm['.report-table _border-spacing'].addEventListener("input", updateTableProperties);
   reportThemeForm['.report-table _margin-top'].addEventListener("input", updateTableProperties);
   reportThemeForm['.report-table _background-color'].addEventListener("input", updateTableProperties);

   //for table header 
reportThemeForm['th_background-color'].addEventListener("input", updateTableHeader);
thPaddingInput.addEventListener("input", updateTableHeader);
thBorderInput.addEventListener("input", updateTableHeader);
thBackgroundColorInput.addEventListener("input", updateTableHeader);
thColorInput.addEventListener("input", updateTableHeader);
thFontWeightInput.addEventListener("input", updateTableHeader);
thFontSizeInput.addEventListener("input", updateTableHeader);

  //   FOR table data td 
  
  const tdInputs = {
    padding: document.getElementById('td_padding'),
    border: document.getElementById('td_border'),
    color: document.getElementById('td_color'),
    fontFamily: document.getElementById('td_font-family'),
    fontSize: document.getElementById('td_font-size'),
    fontStyle: document.getElementById('td_font-style')
};

const tableCells = document.querySelectorAll('td');

function updateTableCellProperties() {
    const styles = {
        padding: tdInputs.padding.value,
        border: tdInputs.border.value,
        color: tdInputs.color.value,
        fontFamily: tdInputs.fontFamily.value,
        fontSize: tdInputs.fontSize.value,
        fontStyle: tdInputs.fontStyle.value
    };

    tableCells.forEach(td => {
        Object.entries(styles).forEach(([property, value]) => {
            td.style[property] = value;
        });
    });
}

Object.values(tdInputs).forEach(input => {
    input.addEventListener("input", updateTableCellProperties);
});

const tfootInputs = {
    backgroundColor: document.getElementById('tfoot_background-color'),
    color: document.getElementById('tfoot_color'),
    fontWeight: document.getElementById('tfoot_font-weight')
};

const tfootElement = document.getElementById('tfoot');

function updateTfootProperties() {
    const styles = {
        backgroundColor: tfootInputs.backgroundColor.value,
        color: tfootInputs.color.value,
        fontWeight: tfootInputs.fontWeight.value
    };

    // Apply styles directly to the <tfoot> element
    Object.entries(styles).forEach(([property, value]) => {
        tfootElement.style[property] = value;
    });
}

// Add event listeners to input fields
Object.values(tfootInputs).forEach(input => {
    input.addEventListener("input", updateTfootProperties);
});

// Initial update
updateTfootProperties();

   
    // Calling functions for each tabs 
    updateGridContainerProperties();
    updateHeader();
    updateTableProperties();
   updateTableHeader();
   updateTableCellProperties();
   
   
   
   const trInputs = {
        evenBackgroundColor: document.getElementById('tr:nth-child(even)_background-color'),
        oddBackgroundColor: document.getElementById('tr:nth-child(odd)_background-color'),
        hoverBackgroundColor: document.getElementById('tr:hover_background-color')
    };

    const trElements = document.querySelectorAll('tr');

    function updateTrStyles() {
        const styles = {
            evenBackgroundColor: trInputs.evenBackgroundColor.value,
            oddBackgroundColor: trInputs.oddBackgroundColor.value,
            hoverBackgroundColor: trInputs.hoverBackgroundColor.value
        };

        trElements.forEach((tr, index) => {
            tr.style.backgroundColor = index % 2 === 0 ? styles.evenBackgroundColor : styles.oddBackgroundColor;
        });
    }

    function handleHoverEffects(tr) {
        tr.addEventListener('mouseover', () => {
            tr.style.backgroundColor = trInputs.hoverBackgroundColor.value;
        });

        tr.addEventListener('mouseout', () => {
            const index = Array.from(tr.parentNode.children).indexOf(tr);
            const targetColor = index % 1 === 0 ? trInputs.evenBackgroundColor.value : trInputs.oddBackgroundColor.value;
            tr.style.backgroundColor = targetColor;
        });
    }

    // Adding event listeners
    Object.values(trInputs).forEach(input => {
        input.addEventListener('input', updateTrStyles);
    });

    // Initial update
    updateTrStyles();

    // Hover effects
    trElements.forEach(tr => {
        handleHoverEffects(tr);
    });
    
  
const dataTableLength = document.getElementsByClassName('dataTables_length'); // Selecting all elements with the class 'dataTables_length'

function updateDataTableLengthColor() {
    const colorInput = document.getElementById('.dataTables_length_color');
    if (colorInput) {
        const color = colorInput.value;
        for (let i = 0; i < dataTableLength.length; i++) {
            dataTableLength[i].style.color = color;
        }
    }
}



updateDataTableLengthColor();




});

