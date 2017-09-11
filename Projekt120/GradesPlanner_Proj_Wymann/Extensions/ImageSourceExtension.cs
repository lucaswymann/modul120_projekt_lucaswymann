using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Media;

namespace $safeprojectname$.Extensions
{
    class ImageSourceExtension
    {
        public static DependencyProperty ImageSourceProperty =
            DependencyProperty.RegisterAttached("ImageSource",
                typeof(ImageSource),
                typeof(ImageSourceExtension),
                new PropertyMetadata(null));
        public static ImageSource GetImageSource(DependencyObject target)
        {
            return (ImageSource)target.GetValue(ImageSourceProperty);
        }
        public static void SetImageSource(DependencyObject target, ImageSource value)
        {
            target.SetValue(ImageSourceProperty, value);
        }
    }
}