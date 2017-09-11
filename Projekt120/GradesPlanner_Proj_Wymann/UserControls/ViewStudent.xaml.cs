using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using $safeprojectname$.Annotations;

namespace $safeprojectname$.UserControls
{
    /// <summary>
    /// Interaction logic for ViewStudent.xaml
    /// </summary>
    public partial class ViewStudent : UserControl, INotifyPropertyChanged
    {
        public static readonly DependencyProperty testTextProperty = DependencyProperty.Register("Test", typeof(string),
            typeof(ViewStudent), new FrameworkPropertyMetadata(string.Empty,
            FrameworkPropertyMetadataOptions.BindsTwoWayByDefault));

        public string _test;
        public string Test
        {
            get { return _test; }
            set
            {
                SetValue(testTextProperty, value);
                _test = value;
                OnPropertyChanged(nameof(Test));
            }
        }

        public ViewStudent()
        {
            InitializeComponent();
        }

        public event PropertyChangedEventHandler PropertyChanged;

        [NotifyPropertyChangedInvocator]
        protected virtual void OnPropertyChanged([CallerMemberName] string propertyName = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
        }
    }
}