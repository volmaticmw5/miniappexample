let btnColorCurrentIndex = 0;
const btnColorClasses = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

class RandomBootstrapColors
{
    getNewColorIndex()
    {
        let newIndex = Math.floor(Math.random() * btnColorClasses.length)
        if(newIndex === btnColorCurrentIndex)
            this.getNewColorIndex();
        if(btnColorClasses[newIndex] === 'undefined')
            this.getNewColorIndex()

        return newIndex;
    }

    getNewColorClass()
    {
        btnColorCurrentIndex = this.getNewColorIndex();
        return btnColorClasses[btnColorCurrentIndex];
    }
}

module.exports.RandomBootstrapColors = RandomBootstrapColors